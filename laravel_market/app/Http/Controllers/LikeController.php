<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
   // いいね一覧
    public function index()
    {
        $like_items = \Auth::user()->likeItems()->orderBy('likes.created_at','desc')->get();
        return view('likes.index', [
          'title' => 'お気に入り一覧',
          'like_items' => $like_items,
        ]);
    }
 
    // いいね追加処理
    public function store(Request $request)
    {
        //
    }
 
    // いいね削除処理
    public function destroy($id)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
