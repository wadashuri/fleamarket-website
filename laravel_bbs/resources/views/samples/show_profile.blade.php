@extends('layouts.message')
 
@section('title', $title)
 
@section('content')
<h1>{{ $title }}</h1>
<dl>
    <dt>名前</dt>
    <dd>{{$name}}</dd>
    <dt>住所</dt>
    <dd>{{$address}}</dd>
    <dt>特技</dt>
    <dd>{{$skill}}</dd>
</dl>
@endsection