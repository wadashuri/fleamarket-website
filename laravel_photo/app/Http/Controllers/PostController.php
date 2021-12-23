<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostImageRequest;
//use App\User;
class PostController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    // 投稿一覧
public function index()
{
    // ログインユーザーを取得
    $user = \Auth::user();
    // ログインユーザーに紐づく投稿一覧を取得
    $posts = $user->posts;
 
    return view('posts.index', [
        'title' => '投稿一覧',
        'posts' => $posts,
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
      public function store(PostRequest $request){
        //画像投稿処理
        $path = '';
        $image = $request->file('image');
        if( isset($image) === true ){
            // publicディスク(storage/app/public/)のphotosディレクトリに保存
            $path = $image->store('photos', 'public');
        }
 
        Post::create([
          'user_id' => \Auth::user()->id,
          'comment' => $request->comment,
          'image' => $path, // ファイルパスを保存
        ]);
        session()->flash('success', '投稿を追加しました');
        return redirect()->route('posts.index');
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
        // ルーティングパラメータで渡されたidを利用してインスタンスを取得
        $post = Post::find($id);
        return view('posts.edit', [
          'title' => '投稿編集',
          'post'  => $post,
        ]);
    }
 
    // 投稿更新処理
    public function update($id, PostRequest $request)
    {
        $post = Post::find($id);
        $post->update($request->only(['comment']));
        session()->flash('success', '投稿を編集しました');
        return redirect()->route('posts.index');
    }
 
    // 投稿削除処理
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        \Session::flash('success', '投稿を削除しました');
        return redirect()->route('posts.index');
        
    }
      // 画像変更処理
      public function editImage($id)
      {
        $post = Post::find($id);
        return view('posts.edit_image', [
          'title' => '画像変更画面',
          'post' => $post,
        ]);
      }
      
       // 画像変更処理
       public function updateImage($id, PostImageRequest $request){
 
        //画像投稿処理
        $path = '';
        $image = $request->file('image');
 
        if( isset($image) === true ){
            // publicディスク(storage/app/public/)のphotosディレクトリに保存
            $path = $image->store('photos', 'public');
        }
 
        $post = Post::find($id);
 
        // 変更前の画像の削除
        if($post->image !== ''){
          // publicディスクから、該当の投稿画像($post->image)を削除
          \Storage::disk('public')->delete(\Storage::url($post->image));
        }
 
        $post->update([
          'image' => $path, // ファイル名を保存
        ]);
 
        session()->flash('success', '画像を変更しました');
        return redirect()->route('posts.index');
      }

}