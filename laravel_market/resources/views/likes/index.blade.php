@extends('layouts.logged_in')
 
@section('content')
  <h1>{{ $title }}</h1>
 
  <ul class="posts">
      @forelse($like_items as $post)
          <li class="post like_post">
            <div class="post_content">
              <div class="post_body">
                <div class="post_body_heading">
                  投稿者:{{ $post->user->name }}
                  ({{ $post->created_at }})
                </div>
                <div class="post_body_main">
                  <div class="post_body_main">
                  <div class="post_body_main_img">
                    @if($post->image !== '')
                        <a href="{{route('posts.show',$post)}}"><img src="{{ asset('storage/' . $post->image) }}"></a>
                    @else
                        <img src="{{ asset('images/no_image.png') }}">
                    @endif
                  </div>
                  <div class="post_body_main_comment">
                    {{ $post->comment }}
                  </div>
                </div>
                  <div class="post_body_main_comment">
                    {{ $post->comment }}
                  </div>
                </div>
                <div class="post_body_footer">
               <div>
                   商品名:{{ $post->name }}￥{{ $post->price }}円カテゴリー:{{ $post->category->name}}
                  </div>
                  </form>
                   @if($post->orders->count()===0)
                 <span>出品中</span>
              　　　 @else
              　 <span>売り切れ</span>
                   @endif
                </div>
              </div>
              <div class="post_comments">
              </div>
            </div>
          </li>
      @empty
          <li>商品はありません</li>
      @endforelse
  </ul>
@endsection