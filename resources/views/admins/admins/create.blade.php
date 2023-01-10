@extends('admins.layouts.master')

@section('page-title', '新增管理員帳號')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">新增管理員帳號</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <form action="{{route('admins.store')}}" method="post"  enctype="multipart/form-data">
        @method('post')
        <!--csrf驗證機制，產生隱藏的input，包含一組驗證密碼-->
        @csrf
        <div class="pt-4">
            <div class=" row mb-3">
                <label for="exampleFormControlTextarea1" class="col-sm-1 col-form-label">姓名：</label>
                <div class="col-sm-9">
                    <input name="name" id="name" type="text" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlTextarea1" class="col-sm-1 col-form-label">電子郵件：</label>
                <div class="col-sm-9">
                    <input name="email" id="email" type="text" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlTextarea1" class="col-sm-1 col-form-label">密碼：</label>
                <div class="col-sm-9">
                    <input name="password" id="password" type="text" class="form-control">
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </div>
    </form>
</div>
@endsection
