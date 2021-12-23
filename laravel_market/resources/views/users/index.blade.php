@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
 
  <div>
    名前
    <P>{{$user->name}}</P>
    コメント
    <p>{{$user->profile}}</p>
    <div class="post_body_main_img">
  @if($user->image !== '')
      <img src="{{ asset('storage/' . $user->image) }}">
  @else
      <img src="{{ asset('images/no_image.png') }}">
  @endif
  <a href="{{route('users.edit_image',$user)}}">画像を変更</a>
</div>
    <a href="{{route('users.edit',$user)}}">プロフィール編集</a>
  </div>
 <h2>出品数:{{$user->posts->count()}}</h2>
 <h2>購入履歴</h2>
  <ul>
 @forelse($orders as $order)
  <li>
 名前：{{ $order->item->name}}商品説明：{{ $order->item->description}}価格：{{ $order->item->price}}円注文日時：{{ $order->item->created_at}}  
  </li>
 @empty
    <li>購入履歴はありません</li>
    </ul>
 @endforelse
@endsection