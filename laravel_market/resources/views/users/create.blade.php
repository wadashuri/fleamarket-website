@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  <form method="POST" action="{{ route('users.store') }}">
      @csrf
      <div>
          <label>
            コメン
            <input type="text" name="profile">
          </label>
      </div>
 
      <input type="submit" value="投稿">
  </form>
@endsection