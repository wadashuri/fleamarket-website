<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleBBSController extends Controller
{
    
    public function store(Request $request){
        
        $request->validate([
        'user_name' => ['required', 'min:2','max:20'],
        'comment' => ['required','min:2', 'max:100'],
      ]);
      // SplFileObjectを追記モードで作成
      $file = new \SplFileObject(storage_path('app/bbs.csv'), 'a');
 
      // 送信データから書き込み用の配列を作成
      $member = [
        $request->input('user_name'),
        $request->input('comment'),
        date('Y年m月d日 H時i分s秒')
      ];
      // csvファイルに書き込み
      $file->fputcsv($member);
      session()->flash('success', '書き込みを追加しました。');
      return redirect('/simple_bbs');
    }
    public function index(){
      $file = new \SplFileObject(storage_path('app/bbs.csv'));
 
      // 読み込み設定
      $file->setFlags(
        \SplFileObject::READ_CSV | // CSVを配列形式で読み込む
        \SplFileObject::READ_AHEAD |
        \SplFileObject::SKIP_EMPTY | // 前の行と合わせて、空行があったら読み飛ばす
        \SplFileObject::DROP_NEW_LINE // 改行コードは無視する
      );
      // 1行ずつ読み込んで配列に保存
      $members = [];
      foreach($file as $member){
        $members[] = $member;
      }
 
      return view('bbs.index', [
        'title' => 'CSV読み込みのサンプル',
        'members' => $members,
      ]);
    }

}

