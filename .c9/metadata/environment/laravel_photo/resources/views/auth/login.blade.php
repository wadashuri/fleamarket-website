{"filter":false,"title":"login.blade.php","tooltip":"/laravel_photo/resources/views/auth/login.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":11},"action":"insert","lines":["@extends('layouts.not_logged_in')"," ","@section('content')","  <h1>ログイン</h1>"," ","  <form method=\"POST\" action=\"{{ route('login') }}\">","      @csrf","      <div>","          <label>","            メールアドレス:","            <input type=\"email\" name=\"email\">","          </label>","      </div>"," ","      <div>","          <label>","            パスワード:","            <input type=\"password\" name=\"password\" >","          </label>","      </div>"," ","      <input type=\"submit\" value=\"ログイン\">","  </form>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":34,"scrollleft":0,"selection":{"start":{"row":23,"column":11},"end":{"row":23,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":13,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1634804522855,"hash":"d6d89469133e68559c235f5efe0867cdf23f63c4"}