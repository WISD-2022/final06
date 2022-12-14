@extends('admins.layouts.master')

@section('page-title', '編輯學生帳號')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">編輯學生帳號</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <form action="{{route('admins.students.update',$array['id'])}}"  method="post"  enctype="multipart/form-data">
        @method('patch')
        <!--csrf驗證機制，產生隱藏的input，包含一組驗證密碼-->
        @csrf
        <div class="pt-4">
            <div class=" row mb-3">
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">姓名</label>
                    <input name="name" id="name" type="text" class="form-control" value="{{$array['name']}}">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">學號</label>
                    <input name="student_id" id="student_id" type="text" class="form-control" value="{{$array["student_id"]}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">科系</label>
                    <select name="department" id="department" class="form-select form-select" aria-label=".form-select example">
                        @foreach($departments as $department)
                            <option value="{{$department->id}}" {{($department->name==$array['department'])?'selected':""}}>{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">班級</label>
                    <select name="team" id="team" class="form-select form-select" aria-label=".form-select example">
                        @foreach($teams as $team)
                            <option value="{{$team->id}}" {{($team->class==$array['team'])?'selected':""}}>{{$team->class}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">性別</label>
                    <select name="sex" id="sex" class="form-select form-select" aria-label=".form-select example">
                        <option value="1" {{($array['sex']=='1')?'selected':""}}>男</option>
                        <option value="2" {{($array['sex']=='2')?'selected':""}}>女</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">身分證字號</label>
                    <input name="number" id="number" type="text" class="form-control" value="{{$array['number']}}">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">電子郵件</label>
                <input name="email" id="email" type="text" class="form-control" value="{{$array['email']}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">密碼</label>
                <input name="password" id="password" type="text" class="form-control" readonly value="{{$array['password']}}">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </div>
    </form>
</div>
@endsection
