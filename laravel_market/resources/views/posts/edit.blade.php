@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  <form method="POST" action="{{ route('posts.update', $post) }}">
      @csrf
      @method('patch')
      <div>
          <label>
            商品名:
            <input type="text" name="name" value="{{ $post->name }}">
          </label>
          <label>
            商品説明:
            <input type="text" name="description" value="{{ $post->description }}">
          </label>
          <label>
            価格:
            <input type="text" name="price" value="{{ $post->price }}">
          </label>
           <label>
           カテゴリー:
            <select name='category_id'>
              @foreach($categories as $category)
                <option value='{{$category->id}}'>{{$category->name}}</option>
              @endforeach
            </select>
          </label>
      </div>
 
      <input type="submit" value="再投稿">
  </form>
@endsection