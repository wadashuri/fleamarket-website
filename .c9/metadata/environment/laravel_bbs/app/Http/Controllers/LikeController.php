{"filter":false,"title":"LikeController.php","tooltip":"/laravel_bbs/app/Http/Controllers/LikeController.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class LikeController extends Controller","{","    //","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":27,"column":1},"action":"insert","lines":["<?php"," ","namespace App\\Http\\Controllers;"," ","use Illuminate\\Http\\Request;"," ","class LikeController extends Controller","{","    // いいね一覧","    public function index()","    {","        return view('likes.index', [","          'title' => 'いいね一覧',","        ]);","    }"," ","    // いいね追加処理","    public function store(Request $request)","    {","        //","    }"," ","    // いいね削除処理","    public function destroy($id)","    {","        //","    }","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":27,"column":1},"end":{"row":27,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1634799098994,"hash":"58d7ec0652d8ecd600833808d96a7445939b7b2e"}