<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('post', function () {
    return view('post');
});

//route::get('/redirects',[\App\Http\Controllers\LoginController::class,"index"]);


Route::post('/login',[LoginController::class,"login"]);

//學生
Route::prefix('students')->name('students.')->group(function(){
    Route::get('/',[StudentController::class,'index'])->name('index');//學生首頁
    Route::get('/test',function (){
        do{
            $faker = Faker\Factory::create();
            $year=$faker->year();
            $a=substr($year,-4,-2);
        }while($a=='19');
        return $year.'/'.$a;
    });
});

