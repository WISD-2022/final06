@extends('admins.layouts.master')

@section('page-title', '科系管理')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">科系列表</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">管理平台</li>
    </ol>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{route('admins.departments.create')}}">新增</a>
    </div>
    <!-- Main Content -->
    <div class="tab-pane fade show active" id="nav-show" role="tabpanel" aria-labelledby="nav-show-tab">
        <div class="pt-4">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">科系</th>
                    <th scope="col">功能</th>
                </tr>
                </thead>

                <tbody>
                @foreach($department as $department)<!--activities陣列內有幾筆資料就會重複執行幾次-->
                <tr>
                    <th scope="row" style="width: 50px">{{ $department->id }}</th><!--印出資料表內的id欄位-->
                    <td>{{ $department->name }}</td>
                    <td style="width: 150px">
                        <a href="{{route('admins.departments.edit',$department->id)}}" class="btn btn-primary btn-sm">編輯</a>
                        <form action="{{route('admins.departments.destroy',$department->id)}}" method="post" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">刪除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
