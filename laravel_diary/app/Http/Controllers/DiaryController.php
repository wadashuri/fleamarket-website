<?php

namespace App\Http\Controllers;
use App\Diary;
use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;
class DiaryController extends Controller
{
    public function index() {
        // データベースから登録されている日記を取得
        // Diaryモデルをつかう
        $diaries = Diary::all();
        // 取り出した日記情報をビューで使えるように変数指定
        return view('diary.index', [
            'title' => '日記一覧',
            'diaries' => $diaries
        ]);
    }
    public function create() {
         $diaries = Diary::all();
         
        return view('diary.create',[
            
            'title' =>'日記追加画面',
            'diaries' => $diaries
            ]);
            return redirect('/diaries');
    }
    public function store(DiaryRequest $request) {
        
        $diaries = Diary::create(
          $request->only([
            'title',
            'log'
          ])
        );
        
        return redirect('/diaries');
    }
    public function edit($id) {
        $diary = Diary::find($id);
        session()->flash('success', 'メンバーを追加しました！');
        return view('diary.edit',[
             'title' => '日記編集画面',
             'diary' => $diary
            ]);
    }
    public function update(DiaryRequest $request,$id) {
        /*
        $link= mysqli_connect('localhost','root','secret','laravel_diary_development');
        mysqli_set_charset($link,'utf-8');
        $sql = 'select * from diaries';
        $result = mysqli_query($link,$sql);
        $diary=[];
        while($tmp = mysqli_fetch_assoc($result)){
            $diary[]=$tmp;
        }
        */
        $diary = Diary::find($id);
        $diary->update($request->only(['title', 'log']));
        return redirect('/diaries');$le
    }
   public function destroy($id){ 
       $diary = Diary::find($id);
       $diary->delete();
        return redirect('/diaries');
   }
  
}
