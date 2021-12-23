<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
      // フォロー一覧
    public function index()
    {
        return view('stores.index', [
          'title' => 'フォロー一覧',
        ]);
    }
 
    // フォロー追加処理
    public function store(Request $request)
    {
        
    }
 
    // フォロー削除処理
    public function destroy($id)
    {
        //
    }
 
    // フォロワー一覧
    public function storeIndex()
    {
        return view('stores.store_index', [
          'title' => 'フォロワー一覧',
        ]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
