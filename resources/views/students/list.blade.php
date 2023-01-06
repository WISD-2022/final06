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
                    <th scope="col">活動名稱</th>
                    <th scope="col">推薦</th>
                    <th scope="col">功能</th>
                </tr>
                </thead>

                <tbody>
{{--                @foreach($activities_show as $activity)<!--activities陣列內有幾筆資料就會重複執行幾次-->--}}
{{--                <tr>--}}
{{--                    <th scope="row" style="width: 50px">{{ $activity->id }}</th><!--印出資料表內的id欄位-->--}}
{{--                    <td>{{ $activity->name }}</td>--}}
{{--                    @if($activity->is_feature == 1)--}}
{{--                        <td>是</td>--}}
{{--                    @else--}}
{{--                        <td>否</td>--}}
{{--                    @endif--}}
{{--                    <td style="width: 150px">--}}
{{--                        <a href="{{route('admin.activities.show',$activity->id)}}" class="btn btn-primary btn-sm">詳細資料</a>--}}

{{--                        <form action="{{route('admin.activities.destroy',$activity->id)}}" method="post" style="display: inline-block">--}}
{{--                            @method('delete')--}}
{{--                            @csrf--}}
{{--                            <button type="submit" class="btn btn-danger btn-sm">刪除</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
