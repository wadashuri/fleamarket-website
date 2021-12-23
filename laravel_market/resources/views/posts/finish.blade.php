@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
   <div class="post_body_main">
                  <div class="post_body_main_img">
                    @if($item->image !== '')
                        <a href="{{route('posts.show',$item)}}"><img src="{{ asset('storage/' . $item->image) }}"></a>
                    @else
                        <img src="{{ asset('images/no_image.png') }}">
                    @endif
                  </div>
                   商品名：{{ $item->name }}商品説明:{{ $item->description }}￥{{ $item->price }}円カテゴリー:{{ $item->category->name}}
                     <span><a href="/">TOPへ戻る</a></span>
@endsection