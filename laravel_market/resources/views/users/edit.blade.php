@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  <form method="POST" action="{{ route('users.update',$user) }}">
      @csrf
      @method('patch')
      <div>
        <label>
          名前：
          <input type="text" name="name" value="{{$user->name}}">
        </label>
          <label>
            プロフィール：
            <input type="text" name="profile" value="{{$user->profile}}">
          </label>
      </div>
      <input type="submit" value="投稿">
  </form>
@endsection