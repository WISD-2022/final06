@extends('teachers.layouts.master')

@section('page-title', '教師未審核假單')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">未審核假單</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <div class="tab-pane fade show active" id="nav-show" role="tabpanel" aria-labelledby="nav-show-tab">
        <div class="pt-4">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">假別</th>
                    <th scope="col">開始時間</th>
                    <th scope="col">結束時間</th>
                    <th scope="col">狀態</th>
                    <th scope="col">功能</th>
                </tr>
                </thead>

                <tbody>
                @foreach($array as $array_item)<!--activities陣列內有幾筆資料就會重複執行幾次-->
                <tr>
                    <th scope="row" style="width: 50px">{{ $array_item['id'] }}</th><!--印出資料表內的id欄位-->
                    @if($array_item['leave'] == 1)
                        <td>事假</td>
                    @elseif($array_item['leave'] == 2)
                        <td>病假</td>
                    @else
                        <td>公假</td>
                    @endif
                    <td>{{ $array_item['start_time'] }}</td>
                    <td>{{ $array_item['end_time'] }}</td>
                    @if($array_item['check'] == 0)
                        <td>審核中</td>
                    @elseif($array_item['check'] == 1)
                        <td>同意</td>
                    @else
                        <td>不同意</td>
                    @endif
                    <td style="width: 150px">
                        <a href="{{route('teachers.show',$array_item['id'])}}" class="btn btn-primary btn-sm">詳細</a>
                        <a href="{{route('teachers.show',$array_item['id'])}}" class="btn btn-primary btn-sm">通過</a>
                        <a href="{{route('teachers.show',$array_item['id'])}}" class="btn btn-danger btn-sm">不通過</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
