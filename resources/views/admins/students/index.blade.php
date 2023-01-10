@extends('admins.layouts.master')

@section('page-title', '學生帳號列表')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">帳號列表</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">管理平台</li>
    </ol>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="#">新增</a>
    </div>
    <!-- Main Content -->
    <div class="tab-pane fade show active" id="nav-show" role="tabpanel" aria-labelledby="nav-show-tab">
        <div class="pt-4">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">科系</th>
                    <th scope="col">班級</th>
                    <th scope="col">姓名</th>
                    <th scope="col">功能</th>
                </tr>
                </thead>

                <tbody>
                @foreach($array as $array_item)<!--activities陣列內有幾筆資料就會重複執行幾次-->
                <tr>
                    <th scope="row" style="width: 50px">{{ $array_item['id'] }}</th><!--印出資料表內的id欄位-->
                    <td>{{ $array_item['department'] }}</td>
                    <td>{{ $array_item['team'] }}</td>
                    <td>{{ $array_item['student'] }}</td>
                    <td style="width: 150px">
                        <a href="#" class="btn btn-primary btn-sm">詳細</a>
                        <form action="#" method="post" style="display: inline-block">
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
