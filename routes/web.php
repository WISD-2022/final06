<?php

use App\Http\Controllers\AccountTeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountStudentController;
use App\Models\Department;
use App\Http\Controllers\TeamController;
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
        return view('dashboard');
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
    Route::get('/',[AdminController::class,'index'])->name('index');//管理員首頁

    //學生帳號管理
    Route::prefix('students')->name('students.')->group(function(){
        Route::get('/',[AccountStudentController::class,'index'])->name('index');//學生帳號列表
        Route::get('/create',[AccountStudentController::class,'create'])->name('create');//新增學生帳號
        Route::post('/',[AccountStudentController::class,'store'])->name('store');//儲存學生帳號
        Route::get('/{student}',[AccountStudentController::class,'show'])->name('show');//學生帳號詳細資料
        Route::get('/{student}/edit',[AccountStudentController::class,'edit'])->name('edit');//編輯學生帳號
        Route::patch('/{student}',[AccountStudentController::class,'update'])->name('update');//更新學生帳號
        Route::delete('/{student}',[AccountStudentController::class,'destroy'])->name('destroy');//刪除學生帳號
    });

    Route::prefix('teams')->name('teams.')->group(function(){
        Route::get('/',[TeamController::class,'index'])->name('index');//班級列表
        Route::get('/create',[TeamController::class,'create'])->name('create');//新增班級
    });

    //教師帳號管理
    Route::prefix('teachers')->name('teachers.')->group(function(){
        Route::get('/',[AccountTeacherController::class,'index'])->name('index');//教師帳號列表
        Route::get('/create',[AccountTeacherController::class,'create'])->name('create');//新增教師帳號
        Route::post('/',[AccountTeacherController::class,'store'])->name('store');//儲存教師帳號
        Route::get('/{teacher}',[AccountTeacherController::class,'show'])->name('show');//教師帳號詳細資料
        Route::get('/{teacher}/edit',[AccountTeacherController::class,'edit'])->name('edit');//編輯教師帳號
        Route::patch('/{teacher}',[AccountTeacherController::class,'update'])->name('update');//更新教師帳號
        Route::delete('/{teacher}',[AccountTeacherController::class,'destroy'])->name('destroy');//刪除教師帳號
    });

});

//教師
Route::prefix('teachers')->name('teachers.')->group(function(){
    Route::get('/',[TeacherController::class,'index'])->name('index');//管理員首頁
    Route::get('/list',[TeacherController::class,'list'])->name('list');//所有假單
    Route::get('/uncheck',[TeacherController::class,'uncheck'])->name('uncheck');//未審核假單
    Route::get('/{leave}',[TeacherController::class,'show'])->name('show');//假單詳細資料
    Route::patch('/{leave}',[TeacherController::class,'update'])->name('update');//審核完假單
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
