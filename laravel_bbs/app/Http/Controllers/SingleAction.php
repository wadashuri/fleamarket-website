<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class SingleAction extends Controller
{
    function __invoke(){
        $title = 'シングルアクションのサンプル';
        $description = 'シングルアクションコントローラを利用しています。';
        return view('samples.single_action', [
            'title' => $title,
            'description' => $description,
        ]);
    }
}