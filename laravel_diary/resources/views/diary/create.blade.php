@extends('layouts.default')
 
@section('title', $title)
 
@section('content')
    <h1>{{ $title }}</h1>
 
    {{-- 以下にフォームを追記します。 --}}
    <form method="post" action="{{ url('/diaries') }}">
        @csrf
        <div>
            <label>
                名前:
                <input type="text" name="title" class="title_field" placeholder="お名前を入力">
            </label>
        </div>
        <div>
            <label>
                コメント：
                <input type="text" name="log" class="log_field" placeholder="コメントを入力">
            </label>
        </div>
        <div>
            <input type="submit" value="投稿">
        </div>
    </form>
 

@endsection