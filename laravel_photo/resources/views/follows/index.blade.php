@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  <a href="{{route('posts.create')}}">新規投稿</a>
  <ul>
      @forelse($posts as $post)
          <li>{{ $post->user->name }}: {{ $post->comment }} ({{ $post->created_at }})</li>
      @empty
          <li>書き込みはありません。</li>
      @endforelse
  </ul>
@endsection