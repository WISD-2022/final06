@extends('admins.layouts.master')

@section('page-title', '編輯管理員帳號')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">編輯管理員帳號</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <form action="{{route('admins.update',$user->id)}}"  method="post"  enctype="multipart/form-data">
        @method('patch')
        <!--csrf驗證機制，產生隱藏的input，包含一組驗證密碼-->
        @csrf
        <div class="pt-4">
            <div class=" mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">姓名</label>
                    <input name="name" id="name" type="text" class="form-control" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">電子郵件</label>
                <input name="email" id="email" type="text" class="form-control" value="{{$user->email}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">密碼</label>
                <input name="password" id="password" type="text" class="form-control" readonly value="{{$user->password}}">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </div>
    </form>
</div>
@endsection
