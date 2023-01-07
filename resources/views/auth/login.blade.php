@extends('layouts.master')

@section('page-title', '登入')

@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">登入</h1>

    </div>
@if(!empty(session('error')))
    <div class="alert alert-danger">{{session('error') }} </div>
@endif

    <form action="/login" method="post">
        @csrf
        <p class="'text-center my-3">帳號:<input class="border-bottom py-1" type="text" name="acc"></p>
        <p class="'text-center my-3">密碼:<input class="border-bottom py-1" type="text" name="acc"></p>
        <p class="'text-center my-3">
            <input type="submit" value="登入">
        </p>
    </form>



@endsection
