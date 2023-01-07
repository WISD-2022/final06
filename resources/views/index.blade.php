@extends('layouts.master')

@section('page-title', '登入')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">登入</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <x-jet-label for="email" value="{{ __('帳號:') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('密碼:') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>
        <br>
        <div>
            <x-jet-button class="ml-4">
                {{ __('登入') }}
            </x-jet-button>
        </div>
    </form>
</div>

@endsection
