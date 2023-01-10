## 系統畫面
### 學生首頁
![image](https://user-images.githubusercontent.com/113490250/211313989-d8420578-0018-41bf-b8f9-88f442863b81.png)
### 學生查看假單
- 學生能查看自己的假單，點選詳細能查看假單詳細資料，點選取消會刪除假單
![image](https://user-images.githubusercontent.com/113490250/211314579-1423d945-7896-4b37-854a-dab9a0fb511a.png)
### 學生查看假單詳細資料
![image](https://user-images.githubusercontent.com/113490250/211314821-8b36562f-2f4c-4879-a9af-68ccf18de334.png)
### 學生新增假單
![image](https://user-images.githubusercontent.com/113490250/211315006-c89dcd2d-2f9a-422e-aeee-95859ef2ac63.png)

## 系統名稱及作用 

請假平台

- 學生能請假以及查詢請假紀錄
- 老師能審核學生假單以及查詢班上學生假單
- 管理員能管理學生及老師帳戶

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

### 管理員
- 學生帳號管理 [3A932087 陳憶萱](https://github.com/3A932087)
- 教師帳號管理 [3A932087 陳憶萱](https://github.com/3A932087)
- 管理員帳號管理 [3A932087 陳憶萱](https://github.com/3A932087)
- 科系管理 [3A932113 楊淑媚](https://github.com/3A932113)
- 班級管理 [3A932113 楊淑媚](https://github.com/3A932113)

## ERD

- **[Lendio](https://lendio.com)**

## 關聯式綱要圖

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## 實際資料表欄位設計

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## 初始專案與DB負責的同學

-初始專案 [3A932087 陳憶萱](https://github.com/3A932087)

-資料庫及資料表建立、資料表關連 [3A932087 陳憶萱](https://github.com/3A932087)、[3A932113 楊淑媚](https://github.com/3A932113)

## 額外使用的套件或樣板

- 前台樣板

- 後台樣板


## 系統測試資料存放位置

## 系統使用者測試帳號
### 前台
- 學生

帳號：

密碼：
- 老師

帳號：

密碼：
### 後台
- 管理者

帳號： 

密碼： 

## 系統開發人員與工作分配
- [3A932087 陳憶萱](https://github.com/3A932087)

- [3A932113 楊淑媚](https://github.com/3A932113)
