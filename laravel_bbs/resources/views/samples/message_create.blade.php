{{-- @extends ('layouts.default') --}}
@extends('layouts.message')
 
@section('title', $title)
 
@section('content')
    <h1>{{ $title }}</h1>
    <label>名前：<input type="text"></label>
    <label>コメント：<input type="text"></label>
    <label><input type="submit" value="投稿"></label>
@endsection