## 系統畫面
> 學生
### 首頁
![image](https://user-images.githubusercontent.com/113490250/211313989-d8420578-0018-41bf-b8f9-88f442863b81.png)
### 查看假單
- 學生能查看自己的假單，點選詳細能查看假單詳細資料，點選取消會刪除假單
![image](https://user-images.githubusercontent.com/113490250/211314579-1423d945-7896-4b37-854a-dab9a0fb511a.png)
### 查看假單詳細資料
![image](https://user-images.githubusercontent.com/113490250/211314821-8b36562f-2f4c-4879-a9af-68ccf18de334.png)
### 新增假單
![image](https://user-images.githubusercontent.com/113490250/211315006-c89dcd2d-2f9a-422e-aeee-95859ef2ac63.png)
> 教師
### 首頁
![image](https://user-images.githubusercontent.com/113490250/211581866-01ffe061-6801-49b6-9bf8-c316d3f0bb7f.png)
### 所有假單
- 能查詢該教師班級下的所有學生假單
![image](https://user-images.githubusercontent.com/113490250/211582026-30dabb18-930f-411c-bc73-efcf0d6511ca.png)
### 未審核假單
- 點選詳細移至畫面最下方有審核按鈕
- 點選審核會跳出審核視窗
![image](https://user-images.githubusercontent.com/113490250/211582097-ab70e52a-cd94-4d57-8412-1e3e44fcd103.png)
### 審核視窗
- 點選審核跳出該視窗
![image](https://user-images.githubusercontent.com/113490250/211582509-3aed5e74-c295-40ff-a2e4-cfdca8b33871.png)
> 管理員
### 首頁
![image](https://user-images.githubusercontent.com/113490250/211583102-9cd3645b-b42d-4d97-97f5-53af75ff4449.png)
### 帳號管理(學生、教師、管理員)
![image](https://user-images.githubusercontent.com/113490250/211583233-8b093766-3ff4-4d05-81f0-514b194433b3.png)
### 新增帳號
![image](https://user-images.githubusercontent.com/113490250/211594487-b9cf738d-481d-499f-980d-7dc2365e9a30.png)
### 帳號詳細資料
![image](https://user-images.githubusercontent.com/113490250/211594575-b7fa4b64-5636-425f-b281-8e4ebd7996b9.png)
### 班級、科系管理
![image](https://user-images.githubusercontent.com/113490250/211630051-7ddfcc03-64f3-4198-a483-e8a67920535f.png)
### 新增班級、科系
![image](https://user-images.githubusercontent.com/113490250/211630277-8c8c7b93-0864-4312-b842-a153c5b7b5c0.png)
### 班級、科系詳細資料
![image](https://user-images.githubusercontent.com/113490250/211630342-be5833c4-f45d-4f61-b216-f2d62fdfa035.png)

## 系統名稱及作用 
### 請假平台
- 學生能請假以及查詢請假紀錄
- 老師能審核學生假單以及查詢班上學生假單
- 管理員能管理班級、科系以及所有帳戶

## 系統的主要案例(功能)與負責的同學
### 學生
- 首頁Route::get('/',[StudentController::class,'index'])->name('index'); [3A932087 陳憶萱](https://github.com/3A932087)
- 假單列表Route::get('/list',[StudentController::class,'list'])->name('list'); [3A932087 陳憶萱](https://github.com/3A932087)
- 新增假單Route::get('/create',[StudentController::class,'create'])->name('create'); [3A932087 陳憶萱](https://github.com/3A932087)
- 儲存假單Route::post('/',[StudentController::class,'store'])->name('store'); [3A932087 陳憶萱](https://github.com/3A932087)
- 假單詳細資料Route::get('/{leave}',[StudentController::class,'show'])->name('show'); [3A932087 陳憶萱](https://github.com/3A932087)
- 刪除假單Route::delete('/{leave}',[StudentController::class,'destroy'])->name('destroy'); [3A932087 陳憶萱](https://github.com/3A932087)
### 教師
- 首頁Route::get('/',[TeacherController::class,'index'])->name('index'); [3A932113 楊淑媚](https://github.com/3A932113)
- 所有假單 Route::get('/list',[TeacherController::class,'list'])->name('list'); [3A932113 楊淑媚](https://github.com/3A932113)
- 未審核假單Route::get('/uncheck',[TeacherController::class,'uncheck'])->name('uncheck'); [3A932113 楊淑媚](https://github.com/3A932113)
- 假單詳細資料Route::get('/{leave}',[TeacherController::class,'show'])->name('show');; [3A932113 楊淑媚](https://github.com/3A932113)
- 審核完之假單Route::patch('/{leave}',[TeacherController::class,'update'])->name('update'); [3A932113 楊淑媚](https://github.com/3A932113)
### 管理員
- 首頁Route::get('/',[AdminController::class,'index'])->name('index'); [3A932113 楊淑媚](https://github.com/3A932113)
- 學生帳號管理 [3A932087 陳憶萱](https://github.com/3A932087)
<pre>
學生帳號列表Route::get('/',[AccountStudentController::class,'index'])->name('index');
新增學生帳號Route::get('/create',[AccountStudentController::class,'create'])->name('create');
儲存學生帳號Route::post('/',[AccountStudentController::class,'store'])->name('store');
學生帳號詳細資料Route::get('/{student}',[AccountStudentController::class,'show'])->name('show');
編輯學生帳號Route::get('/{student}/edit',[AccountStudentController::class,'edit'])->name('edit');
更新學生帳號Route::patch('/{student}',[AccountStudentController::class,'update'])->name('update');
刪除學生帳號Route::delete('/{student}',[AccountStudentController::class,'destroy'])->name('destroy');
</pre>      
- 教師帳號管理 [3A932087 陳憶萱](https://github.com/3A932087)
<pre>
教師帳號列表Route::get('/',[AccountTeacherController::class,'index'])->name('index');
新增教師帳號Route::get('/create',[AccountTeacherController::class,'create'])->name('create');
儲存教師帳號Route::post('/',[AccountTeacherController::class,'store'])->name('store');
教師帳號詳細資料Route::get('/{teacher}',[AccountTeacherController::class,'show'])->name('show');
編輯教師帳號Route::get('/{teacher}/edit',[AccountTeacherController::class,'edit'])->name('edit');
更新教師帳號Route::patch('/{teacher}',[AccountTeacherController::class,'update'])->name('update');
刪除教師帳號Route::delete('/{teacher}',[AccountTeacherController::class,'destroy'])->name('destroy');
</pre>
- 管理員帳號管理 [3A932087 陳憶萱](https://github.com/3A932087)
<pre>
管理員帳號列表Route::get('/list',[AccountAdminController::class,'index'])->name('list');
新增管理員帳號Route::get('/create',[AccountAdminController::class,'create'])->name('create');
儲存管理員帳號Route::post('/',[AccountAdminController::class,'store'])->name('store');
管理員帳號詳細資料Route::get('/{user}',[AccountAdminController::class,'show'])->name('show');
編輯管理員帳號Route::get('/{user}/edit',[AccountAdminController::class,'edit'])->name('edit');
更新管理員帳號Route::patch('/{user}',[AccountAdminController::class,'update'])->name('update');
刪除管理員帳號Route::delete('/{user}',[AccountAdminController::class,'destroy'])->name('destroy');
</pre>
- 科系管理 [3A932113 楊淑媚](https://github.com/3A932113)
<pre>
科系列表Route::get('/',[DepartmentController::class,'index'])->name('index');
新增科系Route::get('/create',[DepartmentController::class,'create'])->name('create');
儲存科系Route::post('/',[DepartmentController::class,'store'])->name('store');
科系詳細資料Route::get('/{department}',[DepartmentController::class,'show'])->name('show');
刪除科系Route::delete('/{department}',[DepartmentController::class,'destroy'])->name('destroy');
編輯科系Route::get('/{department}/edit',[DepartmentController::class,'edit'])->name('edit');
更新科系Route::patch('/{department}',[DepartmentController::class,'update'])->name('update');
</pre>
- 班級管理 [3A932113 楊淑媚](https://github.com/3A932113)
<pre>
班級列表Route::get('/',[TeamController::class,'index'])->name('index');
新增班級Route::get('/create',[TeamController::class,'create'])->name('create');
儲存班級Route::post('/',[TeamController::class,'store'])->name('store');
班級詳細資料Route::get('/{team}',[TeamController::class,'show'])->name('show');
刪除班級Route::delete('/{team}',[TeamController::class,'destroy'])->name('destroy');
編輯班級Route::get('/{team}/edit',[TeamController::class,'edit'])->name('edit');
更新班級Route::patch('/{team}',[TeamController::class,'update'])->name('update');
</pre>
## ERD

## 關聯式綱要圖

## 實際資料表欄位設計

## 初始專案與DB負責的同學
- 初始專案 [3A932087 陳憶萱](https://github.com/3A932087)
- 資料庫及資料表建立、資料表關連 [3A932087 陳憶萱](https://github.com/3A932087)

## 額外使用的套件或樣板
- 前後台樣板
<pre>
 業師授課使用樣板
</pre>

## 系統測試資料存放位置
 final06底下的sql資料夾
 
## 系統使用者測試帳號
### 前台
- 學生
<pre>
帳號：student@gmail.com 
密碼：00000000
</pre>
- 老師
<pre>
帳號：teacher@gmail.com
密碼：00000000
</pre>
### 後台
- 管理者
<pre>
帳號：admin@gmail.com
密碼：00000000 
</pre>

## 系統開發人員與工作分配
- [3A932087 陳憶萱](https://github.com/3A932087)
<pre>
  初始專案
  DB 
  登入功能
  期中報告製作
  學生相關功能
  管理員、教師、學生帳號管理
</pre>
- [3A932113 楊淑媚](https://github.com/3A932113)
<pre>
  登入身份判斷
  期中報告製作
  readme 撰寫
  教師相關功能
  管理員班級&科系管理
</pre>
