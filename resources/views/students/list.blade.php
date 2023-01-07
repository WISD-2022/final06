@extends('students.layouts.master')

@section('page-title', 'Dashboard')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">請假列表</h1>
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
                @foreach($leaves as $leave)<!--activities陣列內有幾筆資料就會重複執行幾次-->
                <tr>
                    <th scope="row" style="width: 50px">{{ $leave->id }}</th><!--印出資料表內的id欄位-->
                    @if($leave->leave == 1)
                        <td>事假</td>
                    @elseif($leave->leave == 2)
                        <td>病假</td>
                    @else
                        <td>公假</td>
                    @endif
                    <td>{{ $leave->start_time }}</td>
                    <td>{{ $leave->end_time }}</td>
                    @if($leave->check == 0)
                        <td>審核中</td>
                    @elseif($leave->leave == 1)
                        <td>同意</td>
                    @else
                        <td>不同意</td>
                    @endif
                    <td style="width: 150px">
                        <a href="{{route('students.show',$leave->id)}}" class="btn btn-primary btn-sm">詳細</a>
                        @if($leave->check == 0)
                        <form action="{{route('students.destroy',$leave->id)}}" method="post" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">取消</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
