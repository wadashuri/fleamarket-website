@extends('layouts.default')
 
@section('title', $title)
 
@section('content')
<h1>{{ $title }}</h1>
 
<form method="post">
  @csrf
  <div>
    <label>
      名前:
      <input type="text" name="user_name">
    </label>
  </div>
  
  <div>
    <label>
      コメント:
      <input type="text" name="comment">
    </label>
  </div>
  <div>
    <input type="submit" name="送信">
  </div>
</form>
 

@foreach($members as $member)
  <p>{{ $member[0] }}: {{ $member[1] }} [ {{ $member[2] }}]</p>
@endforeach
 
@endsection