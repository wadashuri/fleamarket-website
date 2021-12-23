<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ShowProfile extends Controller
{
    function __invoke(){
        $title = 'プロフィール';
        $description = 'シングルアクションコントローラを利用しています。';
        return view('samples.show_profile', [
            'title' => $title,
            'description' => $description,
            'name'=>'山田太郎',
            'address'=>'東京都港区',
            'skill'=>'PHP'
        ]);
    }
}