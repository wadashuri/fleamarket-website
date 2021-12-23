@extends('layouts.logged_in')
 
@section('content')
  <h1>{{ $title }}</h1>
  <a href="{{route('posts.create')}}">新規投稿</a>
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
                        <img src="{{ asset('storage/' . $post->image) }}">
                    @else
                        <img src="{{ asset('images/no_image.png') }}">
                    @endif
                  </div>
                  <div class="post_body_main_comment">
                    {{ $post->comment }}
                  </div>
                </div>
                <div class="post_body_footer">
                  [<a href="{{ route('posts.edit', $post) }}">編集</a>]
                  <form class="delete" method="post" action="{{ route('posts.destroy', $post) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除">
                  </form>
                </div>
              </div>
              <div class="post_comments">
                <span class="post_comments_header">コメント</span>
                <ul class="post_comments_body">
                  @forelse($post->comments as $comment)
                    <li>{{ $comment->user->name }}: {{ $comment->body }}</li>
                  @empty
                    <li>コメントはありません。</li>
                  @endforelse
                </ul>
                <form method="post" action="{{ route('comments.store') }}">
                  @csrf
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                  <label>
                    <input type="text" name="body">
                  </label>
                  <input type="submit" value="送信">
                </form>
              </div>
            </div>
          </li>
      @empty
          <li>書き込みはありません。</li>
      @endforelse
      
  </ul>
  <div class="post_body_main_img">
    <div class="post_body_main_img">
                    @if($post->image !== '')
                        <img src="{{ \Storage::url($post->image) }}">
                    @else
                        <img src="{{ asset('images/no_image.png') }}">
                    @endif
                    <a href="{{ route('posts.edit_image', $post) }}">画像を変更</a>
                  </div>
@endsection