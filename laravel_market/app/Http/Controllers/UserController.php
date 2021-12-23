<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Order;
use App\Http\Requests\UserImageRequest;
use App\Item;
class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $user = \Auth::user();
         $orders = Order::where('user_id','=',$user->id)->latest()->get();
        return view('users.index', [
          'title' => 'プロフィール',
          'user' => $user,
          'orders' => $orders,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', [
          'title' => '新規投稿',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request) {
        User::create([
            'profile'=> $request->profile,
            'image'=>'',
            ]);
       return redirect ()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.show', [
          'title' => 'プロフィール編集',
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
        $user = User::find($id);
        return view('users.edit', [
          'title' => 'プロフィール編集',
          'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,UserRequest $request)
    {
        $user = User::find($id);
        $user->update($request->only(['profile','name']));
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function editImage($id)
    {
        $user = User::find($id);
        return view ('users.edit_image',[
            'title' => '画像変更画面',
            'user' => $user,
            ]);
    }
     // 画像変更処理
      public function updateImage($id, UserImageRequest $request){
 
        //画像投稿処理
        $path = '';
        $image = $request->file('image');
 
        if( isset($image) === true ){
            // publicディスク(storage/app/public/)のphotosディレクトリに保存
            $path = $image->store('photos', 'public');
        }
 
        $user = User::find($id);
 
        // 変更前の画像の削除
        if($user->image !== ''){
          // publicディスクから、該当の投稿画像($post->image)を削除
          \Storage::disk('public')->delete(\Storage::url($user->image));
        }
 
        $user->update([
          'image' => $path, // ファイル名を保存
        ]);
 
        session()->flash('success', '画像を変更しました');
        return redirect()->route('users.index');
      }
}
