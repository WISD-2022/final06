@extends('admins.layouts.master')

@section('page-title', '班級詳細資料')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">班級詳細資料</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{route('admins.teams.edit',$array['id'])}}">編輯</a>
    </div>
    <!-- Main Content -->
    <div class="pt-4">
        <div class="row mb-3">
            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">班級</label>
                <input name="team" id="team" type="text" class="form-control-plaintext" readonly value="{{$array['team']}}">
            </div>

            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">科系</label>
                <input name="department" id="department" type="text" class="form-control-plaintext" readonly value="{{$array['department']}}">
            </div>
        </div>

    </div>
</div>
@endsection
