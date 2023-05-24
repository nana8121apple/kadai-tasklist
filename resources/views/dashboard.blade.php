@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="sm:grid sm:grid-cols-3 sm:gap-10">
            <div class="sm:col-span-2">
                {{-- 投稿フォーム --}}
                @include('tasks.form')
                {{-- 投稿一覧 --}}
                @include('tasks.tasks')
            </div>
        </div>
    @else
       <div class="center jumbotron">
            <div class="navbar-brand d-flex flex-row-reverse bd-highlight">
                Welcome to the Tasklist
            </div>
        </div>
    @endif
@endsection