@extends('admins.layouts.master')

@section('page-title', '編輯班級')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">編輯班級</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <form action="{{route('admins.teams.update',$array['id'])}}"  method="post"  enctype="multipart/form-data">
        @method('patch')
        <!--csrf驗證機制，產生隱藏的input，包含一組驗證密碼-->
        @csrf
        <div class="pt-4">
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
                    <input name="team" id="team" type="text" class="form-control"  value="{{$array['team']}}">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">入學年度</label>
                    <input name="admission" id="admission" type="text" class="form-control" value="{{$array['admission']}}">
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </div>
    </form>
</div>
@endsection
