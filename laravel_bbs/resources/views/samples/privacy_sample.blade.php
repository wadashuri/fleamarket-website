{{-- @extends ('layouts.default') --}}
@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
    <h1>{{ $title }}</h1>
    <p>プライバシーポリシーページです。</p>
@endsection