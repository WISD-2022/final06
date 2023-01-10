@extends('admins.layouts.master')

@section('page-title', '教師詳細資料')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">教師帳號詳細資料</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{route('admins.teachers.edit',$array['id'])}}">編輯</a>
    </div>
    <!-- Main Content -->
    <div class="pt-4">
        <div class="  mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">姓名</label>
                <input name="name" id="name" type="text" class="form-control-plaintext" readonly  value="{{$array['name']}}">
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">科系</label>
                <input name="department" id="department" type="text" class="form-control-plaintext" readonly value="{{$array['department']}}">
            </div>

            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">班級</label>
                <input name="team" id="team" type="text" class="form-control-plaintext" readonly value="{{$array['team']}}">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">電子郵件</label>
            <input name="email" id="email" type="text" class="form-control-plaintext" readonly  value="{{$array['email']}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">密碼</label>
            <input name="password" id="password" type="text" class="form-control-plaintext" readonly  value="{{$array['password']}}">
        </div>
    </div>
</div>
@endsection
