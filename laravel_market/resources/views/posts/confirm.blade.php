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
                  <div>
                   商品名：{{ $item->name }}商品説明:{{ $item->description }}￥{{ $item->price }}円カテゴリー:{{ $item->category->name}};
                   </div>
  @if($item->orders->count()===0)
   <form method="POST" action="/posts/{{ $item->id }}/finish">
    @csrf
     <input type="submit"  value="内容を確認し、購入する">
     </form>
  @else
    <span>購入済み</span>
  @endif

@endsection