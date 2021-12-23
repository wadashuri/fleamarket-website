@extends('layouts.logged_in')
 
@section('content')
  <h1>{{ $title }}</h1>
  <ul class="posts">
      @forelse($posts as $post)
          <li class="post">
            <div class="post_content">
              <div class="post_body">
                <div class="post_body_heading">
                  投稿者:{{ $post->user->name }}
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
                  <div class="post_body_main_comment">
                    {{ $post->comment }}
                  </div>
                </div>
                 <div>
                  商品名：{{ $post->name }}商品説明:{{ $post->description }}￥{{ $post->price }}円カテゴリー:{{ $post->category->name}}
                  </div>
                   @if($post->orders->count()===0)
                 <span>出品中</span>
              　　　 @else
              　 <span>売り切れ</span>
                   @endif
                <div class="post_body_footer">
                   お気に入り<a class="like_button">{{ $post->isLikedBy(Auth::user()) ? '★' : '☆' }}</a>
                  <form method="post" class="like" action="{{ route('posts.toggle_like',$post) }}" >
                    @csrf
                    @method('patch')
                  </form>
                  </form>
                </div>
              </div>
              </div>
            </div>
          </li>
      @empty
          <li>商品はありません</li>
      @endforelse
  </ul>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $('.like_button').on('click', (event) => {
       $(event.currentTarget).next() .submit();
    })
  </script>
@endsection