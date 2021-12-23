@extends('layouts.logged_in')
 
@section('content')
  <h1>{{ $title }}</h1>
  <a href="{{route('posts.create')}}">新規出品</a>
  <ul class="posts">
      @forelse($posts as $post)
          <li class="post">
            <div class="post_content">
              <div class="post_body">
                <div class="post_body_heading">
                  出品者:{{ $post->user->name }}
                  ({{ $post->created_at }})
                </div>
                <div class="post_body_main">
                  <div class="post_body_main_img">
                    @if($post->image !== '')
                        <a href="{{route('posts.show',$post)}}"><img src="{{ asset('storage/' . $post->image) }}"></a>
                    @else
                        <img src="{{ asset('images/no_image.png') }}">
                    @endif
                  </div>
                  <div>
                   商品名：{{ $post->name }}商品説明:{{ $post->description }}￥{{ $post->price }}円カテゴリー:{{ $post->category->name}}
                  </div>
                </div>
                 @if($post->orders->count()===0)
                 <span>出品中</span>
              　　　 @else
              　 <span>売り切れ</span>
                   @endif
                <div class="post_body_footer">
                  [<a href="{{ route('posts.edit', $post) }}">商品編集</a>]
                  <form class="delete" method="post" action="{{ route('posts.destroy', $post) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除">
                  </form>
                </div>
                 <a href="{{ route('posts.edit_image', $post) }}">画像を変更</a>
              </div>
              </div>
            </div>
          </li>
      @empty
          <li>出品している商品はありません</li>
      @endforelse
  </ul>
@endsection