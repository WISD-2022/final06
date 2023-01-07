@extends('layouts.master')

@section('page-title', '登入')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">登入</h1>
t 
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">登入</li>
    </ol>
    <form method="POST" action="{{ route('login') }}">
        @csrf


        <div>
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>
            <x-jet-button class="ml-4">
                {{ __('Log in') }}
            </x-jet-button>
        </div>
    </form>
</div>

<form action="/login" method="post">
    @csrf
    <p class="'text-center my-3">帳號:<input class="border-bottom py-1" type="text" name="acc"></p>
    <p class="'text-center my-3">密碼:<input class="border-bottom py-1" type="text" name="acc"></p>
    <p class="'text-center my-3">
        <input type="submit" value="登入">
    </p>
</form>



@endsection
