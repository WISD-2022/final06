<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountStudentController;
use App\Models\Department;
use App\Models\Team;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {   //登入
    return view('index');
});
Route::get('/welcome', function () {   //登入
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $user=Auth::User();
        $type=$user->type;
        if($type=='0'){//登入身份為管理員
            return redirect('admins');
        }
        elseif($type=='1'){//登入身份為學生
            return redirect('students');
        }
        elseif($type=='2'){//登入身份為導師
            return redirect('teachers');
        }
        //return view('dashboard');
        //return redirect('students');
    })->name('dashboard');
});


Route::get('post', function () {
    return view('post');
});

//學生
Route::prefix('students')->name('students.')->group(function(){
    Route::get('/',[StudentController::class,'index'])->name('index');//學生首頁
    Route::get('/list',[StudentController::class,'list'])->name('list');//假單列表
    Route::get('/create',[StudentController::class,'create'])->name('create');//新增假單
    Route::post('/',[StudentController::class,'store'])->name('store');//儲存假單
    Route::get('/{leave}',[StudentController::class,'show'])->name('show');//假單詳細資料
    Route::delete('/{leave}',[StudentController::class,'destroy'])->name('destroy');//刪除假單

});

//管理員
Route::prefix('admins')->name('admins.')->group(function(){
    Route::get('/',[AccountStudentController::class,'index'])->name('index');//管理員首頁

});

//教師
Route::prefix('teachers')->name('teachers.')->group(function(){
    Route::get('/',[TeacherController::class,'index'])->name('index');//管理員首頁
    Route::get('/list',[TeacherController::class,'list'])->name('list');//所有假單
    Route::get('/uncheck',[TeacherController::class,'uncheck'])->name('uncheck');//未審核假單
    Route::get('/{leave}',[TeacherController::class,'show'])->name('show');//假單詳細資料
});



Route::get('/test',function (){
    $department=Department::find(1);
    $teams=$department->team()->get();
    echo $teams[0]->id;
//    foreach ($teams as $team){
//        echo 1;
//        echo $team;
//    }
    //return $teams;
    //print_r($teams);
    echo 'OKK';
});
