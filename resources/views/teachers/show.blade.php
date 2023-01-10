@extends('teachers.layouts.master')

@section('page-title', '詳細資料')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">詳細資料</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">請假平台</li>
    </ol>
    <!-- Main Content -->
    <div class="pt-4">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">假別</label>
            @if($leave->leave == 1)
                <input name="leave" id="leave" type="text" class="form-control" disabled value="事假">
            @elseif($leave->leave == 2)
                <input name="leave" id="leave" type="text" class="form-control" disabled value="病假">
            @else
                <input name="leave" id="leave" type="text" class="form-control" disabled value="公假">
            @endif
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">開始時間</label>
                <input name="start_time" id="start_time" type="date" class="form-control" disabled value="{{$leave->start_time}}">
            </div>

            <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">結束時間</label>
                <input name="end_time" id="end_time" type="date" class="form-control" disabled value="{{$leave->start_time}}">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">事由</label>
            <textarea name="reason" id="reason" class="form-control" rows="10" placeholder="請輸入請假事由" disabled>{{$leave->reason}}</textarea><!--多行輸入框-->
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">備註</label>
            <textarea name="remark" id="remark" class="form-control" rows="10" placeholder="請輸入備註" disabled>{{$leave->remark}}</textarea><!--多行輸入框-->
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">證明文件</label>
            <img src="{{asset('images/'.$leave->picture)}}" class="form-control">
        </div>
        <div>
            <!-- 互動式視窗按鈕 -->
            @if($leave->check == 0)
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    審核
                </button>
            @else
                {{--                            --}}
            @endif
        </div>
    </div>
</div>

<!-- 互動視窗 -->
<!-- 互動視窗內容 -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">審核</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('teachers.update',$leave->id)}}" method="post" enctype="multipart/form-data" style="display: inline-block">
                @method('patch')
                @csrf
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="check" id="check" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            同意
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="check" id="check" value="2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            不同意
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">審核意見</label>
                        <textarea class="form-control" id="opinion" name="opinion" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" >
                        送出
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
