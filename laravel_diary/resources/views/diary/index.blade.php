{{-- レイアウトファイルを指定 --}}
@extends('layouts.default')
 
{{-- @yield('title') の部分を穴埋め --}}
@section('title', $title)
 
{{-- @yield('content') の部分を穴埋め --}}
@section('content')
    <h1>{{ $title }}</h1>
    <a href="/diaries/create">新規投稿</a>
    
   @forelse($diaries as $diary)

m   
    <div>
        <p>{{$diary->title}}：{{$diary->created_at}}</p>
        <p>{{$diary->log}}</p>
        <a href="{{ url('/diaries/' . $diary->id . '/edit') }}">編集<a>
       <form action="{{ url('/diaries/' . $diary->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input type='submit' value='削除'>
        </form>
    </div> 
    @empty
    <p>日記はありません</p>
    @endforelse
@endsection