@extends('students.layouts.master')

@section('page-title', 'Dashboard')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">新增假單</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <form action="{{route('students.store')}}" method="post"  enctype="multipart/form-data">
        @method('post')
        <!--csrf驗證機制，產生隱藏的input，包含一組驗證密碼-->
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">假別</label>
            <div class="ms-3 me-3">
                <div class="row">
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="leave" id="leave" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">事假</label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="leave" id="leave" value="2">
                        <label class="form-check-label" for="flexRadioDefault2">病假</label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="leave" id="leave" value="3">
                        <label class="form-check-label" for="flexRadioDefault2">公假</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">開始時間</label>
                <input name="start_time" id="start_time" type="date" class="form-control">
            </div>

            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">結束時間</label>
                <input name="end_time" id="end_time" type="date" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">事由</label>
            <textarea name="reason" id="reason" class="form-control" rows="10" placeholder="請輸入請假事由"></textarea><!--多行輸入框-->
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">備註</label>
            <textarea name="remark" id="remark" class="form-control" rows="10" placeholder="請輸入備註"></textarea><!--多行輸入框-->
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">證明文件</label>
            <input type="file" name="picture" id="picture" accept="image/*" class="form-control">
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary btn-sm" type="submit">儲存</button>
        </div>

    </form>
</div>
@endsection
