{{-- @extends ('layouts.default') --}}
@extends('layouts.not_logged_in')
 
@section('title', $title)
 
@section('content')
    <h1>{{ $title }}</h1>
    <p>ログインページです。</p>
@endsection