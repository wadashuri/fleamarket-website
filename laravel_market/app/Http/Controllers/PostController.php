<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Item;
use Illuminate\Http\Request;
use App\Category;
use App\Like;
use App\Order;
use App\Http\Requests\PostImageRequest;
use App\Illuminate\Support\Facades\Auth;
use App\Http\Requests\PosteditRequest;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function top() {
     $user =\Auth::user();
    $posts = Item::where('user_id','!=',$user->id)->latest()->get();
    return view('posts.top',[
            'title'=>'トップページ',
            'posts' => $posts,]);
  }  
     
  public function index()
{
    $posts = \Auth::user()->posts()->latest()->get();
    return view('posts.index', [
        'title' => '出品一覧',
        'posts' => $posts,
    ]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',[
            'title'=>'新規出品',
            'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      // 投稿追加処理
      public function store(PostRequest $request){
          $path = '';
        $image = $request->file('image');
        if( isset($image) === true ){
            // publicディスク(storage/app/public/)のphotosディレクトリに保存
            $path = $image->store('photos', 'public');
        }
        Item::create([
          'user_id' => \Auth::user()->id,
          'name' => $request->name,
          'image' => $path, // 仮置き
          'description'=> $request->description,
          'category_id'=>$request->category_id,
          'price'=> $request->price,
        ]);
        session()->flash('success', '投稿を追加しました');
        return redirect()->route('posts.index');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Item::find($id);
      return view('posts.show',[
          'title'=>'商品詳細',
          'item' => $item,
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        // ルーティングパラメータで渡されたidを利用してインスタンスを取得
        $post = Item::find($id);
         $categories = Category::all();
        return view('posts.edit', [
          'title' => '投稿編集',
          'post'  => $post,
           'categories'=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, PosteditRequest $request)
    {
        $post = Item::find($id);
        $post->update($request->only(['name','description','price','category_id',]));
        session()->flash('success', '投稿を編集しました');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function destroy($id)
    {
        $post = Item::find($id);
 
        // 画像の削除
        if($post->image !== ''){
          \Storage::disk('public')->delete($post->image);
        }
 
        $post->delete();
        session()->flash('success', '投稿を削除しました');
        return redirect()->route('posts.index');
    }
    public function editImage($id)
      {
        $post = Item::find($id);
        return view('posts.edit_image', [
          'title' => '画像変更画面',
          'post' => $post,
        ]);
      }
      public function updateImage($id, PostImageRequest $request){
 
        //画像投稿処理
        $path = '';
        $image = $request->file('image');
 
        if( isset($image) === true ){
            // publicディスク(storage/app/public/)のphotosディレクトリに保存
            $path = $image->store('photos', 'public');
        }
 
        $post = Item::find($id);
 
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
      
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function toggleLike($id) {
      $user =\Auth::user();
      $post =Item::find($id);
      
      if($post->isLikedBy($user)) {
        $post->likes->where('user_id', $user->id)->first()->delete();
        \Session::flash('success','いいねを取り消しました');
      } else {
        Like::create([
          'user_id' => $user->id,
          'item_id' => $post->id,
          ]);
         \Session::flash('success', 'いいねしました');
      }
      return redirect('/');
    }
     public function postConfirm ($id) {
       $posts = Item::all();
       $item = Item::find($id);
      return view('posts.confirm',[
          'title'=>'購入確認画面',
          'item' => $item,
          'posts' => $posts,
          ]);
    }
    public function postFinish ($id) {
      $user =\Auth::user();
      $item =Item::find($id);
       Order::create([
          'user_id' => $user->id,
          'item_id' => $item->id,
          ]);
          return view('posts.finish', [
          'title' => 'ご購入ありがとうございました！',
          'item' => $item,
        ]);
    }
}
