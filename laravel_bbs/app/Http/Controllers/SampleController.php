<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
// Messageモデルをインポート
use App\Message;
class SampleController extends Controller
{
    public function sampleAction(){
        $title = 'コントローラーのアクションを利用';
        $num = 10;
        $names = ['山田', '山本', '鈴木', '佐藤', '田中'];
        return view('samples.blade_example',[
            'title' => $title,
            'num' => $num,
            'names' => $names,
        ]);
    }
    

 
    public function modelSample(){
      // Messageモデルを利用してid:2のmessageを取得
      $message = Message::find(2);
      return view('samples.model_sample', [
        'title' => 'モデルの使いかた',
        'message' => $message,
      ]);
    }
}
