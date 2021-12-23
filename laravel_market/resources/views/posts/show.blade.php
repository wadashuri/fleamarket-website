@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
 投稿者:{{ $item->user->name }}
                  ({{ $item->created_at }})
                </div>
                <div class="post_body_main">
                  <div class="post_body_main_img">
                    @if($item->image !== '')
                        <a href="{{route('posts.show',$item)}}"><img src="{{ asset('storage/' . $item->image) }}"></a>
                    @else
                        <img src="{{ asset('images/no_image.png') }}">
                    @endif
                  </div>
                   商品名：{{ $item->name }}商品説明:{{ $item->description }}￥{{ $item->price }}円カテゴリー:{{ $item->category->name}};
  @if($item->orders->count()===0)
     <a href="{{route('posts.confirm',$item)}}"><input type="submit" value="購入する"></a>
  @else
    <span>購入済み</span>
  @endif
@endsection