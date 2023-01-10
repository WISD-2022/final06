@extends('admins.layouts.master')

@section('page-title', '新增科系')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">新增科系</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <form action="{{route('admins.departments.store')}}" method="post"  enctype="multipart/form-data">
        @method('post')
        <!--csrf驗證機制，產生隱藏的input，包含一組驗證密碼-->
        @csrf
        <div class="pt-4">
            <div class="row mb-3">
                <div class="col-6">
                    <!--改為下拉式選單-->
                    <label for="exampleFormControlInput1" class="form-label">科系</label>
                    <select name="department" id="department" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <!--改為下拉式選單-->
                    <label for="exampleFormControlInput1" class="form-label">班級</label>
                    <select name="team" id="team" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->class}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </div>
    </form>
</div>
@endsection
