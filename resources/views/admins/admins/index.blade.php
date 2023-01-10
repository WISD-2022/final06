@extends('admins.layouts.master')

@section('page-title', '管理員帳號列表')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">管理員帳號列表</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">管理平台</li>
    </ol>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{route('admins.create')}}">新增</a>
    </div>
    <!-- Main Content -->
    <div class="tab-pane fade show active" id="nav-show" role="tabpanel" aria-labelledby="nav-show-tab">
        <div class="pt-4">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">姓名</th>
                    <th scope="col">功能</th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)<!--activities陣列內有幾筆資料就會重複執行幾次-->
                <tr>
                    <th scope="row" style="width: 50px">{{ $user->id }}</th><!--印出資料表內的id欄位-->
                    <td>{{ $user->name }}</td>
                    <td style="width: 150px">
                        <a href="{{route('admins.show',$user->id)}}" class="btn btn-primary btn-sm">詳細</a>
                        <form action="{{route('admins.destroy',$user->id)}}" method="post" style="display: inline-block">
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
