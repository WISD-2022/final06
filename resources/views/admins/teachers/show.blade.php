@extends('admins.layouts.master')

@section('page-title', '管理員詳細資料')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">管理員帳號詳細資料</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{route('admins.edit',$user->id)}}">編輯</a>
    </div>
    <!-- Main Content -->
    <div class="pt-4">
        <div class="  mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">姓名</label>
                <input name="name" id="name" type="text" class="form-control-plaintext" readonly  value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">電子郵件</label>
            <input name="email" id="email" type="text" class="form-control-plaintext" readonly  value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">密碼</label>
            <input name="password" id="password" type="text" class="form-control-plaintext" readonly  value="{{$user->password}}">
        </div>
    </div>
</div>
@endsection
