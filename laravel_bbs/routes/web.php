<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ('シンプルなルーティング！');
});
Route::get('/practice', function(){
   $uri = \Route::current()->uri(); 
   return('現在のurl:'.$uri);
});



 
Route::get('/non_view_sample', function () {
    return '
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ルーティングのみでHTMLを出力</title>
</head>
<body>
    <h1>ルーティングのみでHTMLを出力</h1>
    <p>ルーティングのファイルのみで、HTML全体を返すと長くなります。</p>
</body>
</html>
';
});


 
Route::get('/view_sample', function () {
    return view('samples.');
});

 
Route::get('/blade_sample', function () {
    $title = 'bladeテンプレートのサンプルです';
    $description = 'bladeテンプレートを利用すると、HTML内にPHPの変数を埋め込むことができます。';
    return view('samples.blade_sample',[
        'title' => $title,
        'description' => $description,
        'direct' => '配列に直接文字列を書いても問題ありません。'
    ]);
});

Route::get('/about', function(){
    $title='このアプリについて';
    $title_coment='このアプリはシンプルな掲示板です';
    $appli='アプリの特徴';
    $appli_coments =['投稿を書き込むことができます','投稿を一覧表示できます','その他色々あります'];
   return view('samples.about',[
       'title' =>$title,
       'title_coment'=>$title_coment,
       'appli'=>$appli,
       'appli_coments'=>$appli_coments,
       ]);
});


 
Route::get('/blade_example', function(){
    $title = 'bladeテンプレートの様々な機能';
    $num = 10;
    $names = ['山田', '山本', '鈴木', '佐藤', '田中'];
    return view('samples.blade_example',[
        'title' => $title,
        'num' => $num,
        'names' => $names,
    ]);
});


 
Route::get('/top_sample', function(){
    return view('samples.top_sample', [
        'title' => 'トップページ',
    ]);
});
Route::get('/user_sample', function(){
    return view('samples.user_sample', [
        'title' => 'ユーザー設定',
    ]);
});
Route::get('/privacy_sample', function(){
    return view('samples.privacy_sample', [
        'title' => 'プライバシーポリシー',
    ]);
});
Route::get('/login_sample', function(){
    return view('samples.login_sample', [
        'title' => 'ログイン',
    ]);
});
Route::get('/signup_sample', function(){
    return view('samples.signup_sample', [
        'title' => 'サインアップ',
    ]);
});


Route::get('/sample_action', 'SampleController@sampleAction');


 
Route::get('/single_action', 'SingleAction');

 
Route::get('/show_profile', 'ShowProfile');

Route::get('/messages_sample/edit',function(){
    return view('samples.message_edit',[
        'title'=>'投稿を編集',
        ]); 
});

Route::get('/messages_sample/create',function(){
    return view('samples.message_create',[
        'title'=>'新規投稿',
        ]); 
});


 
Route::get('/simple_bbs', 'SimpleBBSController@index');

Route::post('/simple_bbs', 'SimpleBBSController@store');

Route::get('/model_sample', 'SampleController@modelSample');

 
Route::get('/messages', 'MessageController@index');
 
Route::post('/messages', 'MessageController@store');

Route::resource('likes', 'LikeController')->only([
  'index', 'store', 'destroy'
]);

 
Route::resource('follows', 'FollowController')->only([
  'index', 'store', 'destroy'
]);
 
Route::get('/follower', 'FollowController@followerIndex');