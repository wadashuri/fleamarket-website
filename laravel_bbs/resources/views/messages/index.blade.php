@extends('layouts.default')
 
@section('title', $title)
 
@section('content')
    <h1>{{ $title }}</h1>
 
    {{-- 以下にフォームを追記します。 --}}
    <form method="post" action="{{ url('/messages') }}">
        @csrf
        <div>
            <label>
                名前:
                <input type="text" name="name" class="name_field" placeholder="お名前を入力">
            </label>
        </div>
        <div>
            <label>
                コメント：
                <input type="text" name="body" class="comment_field" placeholder="コメントを入力">
            </label>
        </div>
        <div>
            <input type="submit" value="投稿">
        </div>
    </form>
 
    <ul>
        @forelse($messages as $message)
            <li>{{ $message->name }}: {{ $message->body }}  {{ $message->created_at }}</li>
        @empty
            <li>メッセージはありません。</li>
        @endforelse
    </ul>
@endsection