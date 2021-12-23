@extends('layouts.default')
 
@section('title', $title)
 
@section('content')
<h1>{{ $title }}</h1>
<form action="{{ url('/diaries/' . $diary->id) }}" method="post">
  @csrf
  @method('PATCH')
    <div>
            <label>
                名前:
                <input type="text" name="title" class="title_field" value="{{$diary->title}}">
            </label>
    </div>
        <div>
            <label>
                コメント：
                <input type="text" name="log" class="log_field" value="{{$diary->log}}">
            </label>
        </div>
        <div>
            <input type="submit" value="投稿">
        </div>
    </form>
    
    @endsection