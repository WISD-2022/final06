@extends('admins.layouts.master')

@section('page-title', '學生詳細資料')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">學生帳號詳細資料</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{route('admins.students.edit',$array['id'])}}">編輯</a>
    </div>
    <!-- Main Content -->
    <div class="pt-4">
        <div class=" row mb-3">
            <div class="col-6">
                <label for="exampleFormControlTextarea1" class="form-label">姓名</label>
                <input name="name" id="name" type="text" class="form-control-plaintext" readonly  value="{{$array['name']}}">
            </div>
            <div class="col-6">
                <label for="exampleFormControlTextarea1" class="form-label">學號</label>
                <input name="student_id" id="student_id" type="text" class="form-control-plaintext" readonly value="{{$array["student_id"]}}">
            </div>
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
        <div class="row mb-3">
            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">性別</label>
                <input name="sex" id="sex" type="text" class="form-control-plaintext" readonly  value="{{($array['sex']=='1')?'男':'女'}}">
            </div>

            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">身分證字號</label>
                <input name="number" id="number" type="text" class="form-control-plaintext" readonly  value="{{$array['number']}}">
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
