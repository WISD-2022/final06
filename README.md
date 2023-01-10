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

### 帳號詳細資料

### 班級、科系管理



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
- 教師帳號管理 [3A932087 陳憶萱](https://github.com/3A932087)
- 管理員帳號管理 [3A932087 陳憶萱](https://github.com/3A932087)
- 科系管理 [3A932113 楊淑媚](https://github.com/3A932113)
- 班級管理 [3A932113 楊淑媚](https://github.com/3A932113)

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
