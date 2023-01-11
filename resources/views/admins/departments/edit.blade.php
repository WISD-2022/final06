@extends('admins.layouts.master')

@section('page-title', '編輯科系')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">編輯科系</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <form action="{{route('admins.departments.update',$department->id)}}"  method="post"  enctype="multipart/form-data">
        @method('patch')
        <!--csrf驗證機制，產生隱藏的input，包含一組驗證密碼-->
        @csrf
        <div class="pt-4">
            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">科系</label>
                <input name="department" id="department" type="text" class="form-control" value="{{$department->name}}">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-sm" type="submit">儲存</button>
            </div>
        </div>
    </form>
</div>
@endsection
