{"filter":false,"title":"edit_image.blade.php","tooltip":"/laravel_photo/resources/views/posts/edit_image.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":25,"column":11},"action":"insert","lines":["@extends('layouts.logged_in')"," ","@section('content')","    <h1>{{ $title }}</h1>","    <h2>現在の画像</h2>","    @if($post->image !== '')","        <img src=\"{{ \\Storage::url($post->image) }}\">","    @else","        画像はありません。","    @endif","    <form","        method=\"POST\"","        action=\"{{ route('posts.update_image', $post) }}\"","        enctype=\"multipart/form-data\"","    >","        @csrf","        @method('patch')","        <div>","            <label>","                画像を選択:","                <input type=\"file\" name=\"image\">","            </label>","        </div>","        <input type=\"submit\" value=\"更新\">","    </form>","@endsection"],"id":1}],[{"start":{"row":17,"column":7},"end":{"row":24,"column":11},"action":"remove","lines":[" <div>","            <label>","                画像を選択:","                <input type=\"file\" name=\"image\">","            </label>","        </div>","        <input type=\"submit\" value=\"更新\">","    </form>"],"id":2},{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"remove","lines":[" "]}]]},"ace":{"folds":[],"scrolltop":46.5,"scrollleft":0,"selection":{"start":{"row":25,"column":11},"end":{"row":25,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1635232487005,"hash":"554d8538326d60bc24943989b79ee9c05e00c9a3"}