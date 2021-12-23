<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class PostController extends Controller
{
    // 投稿一覧
    public function index()
    {
        return view('posts.index', [
          'title' => '投稿一覧',
        ]);
    }
 
    // 新規投稿フォーム
    public function create()
    {
        return view('posts.create', [
          'title' => '新規投稿',
        ]);
    }
 
    // 投稿追加処理
    public function store(Request $request)
    {
        //
    }
 
    // 投稿詳細
    public function show($id)
    {
        return view('posts.show', [
          'title' => '投稿詳細',
        ]);
    }
 
    // 投稿編集フォーム
    public function edit($id)
    {
        return view('posts.edit', [
          'title' => '投稿編集',
        ]);
    }
 
    // 投稿更新処理
    public function update(Request $request, $id)
    {
        //
    }
 
    // 投稿削除処理
    public function destroy($id)
    {
        //
    }
}