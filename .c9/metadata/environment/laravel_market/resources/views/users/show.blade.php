{"filter":false,"title":"show.blade.php","tooltip":"/laravel_market/resources/views/users/show.blade.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"remove","lines":["@extends('layouts.logged_in')"," ","@section('title', $title)"," ","@section('content')","  <h1>{{ $title }}</h1>","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":17,"column":11},"action":"insert","lines":["@extends('layouts.logged_in')"," ","@section('title', $title)"," ","@section('content')","  <h1>{{ $title }}</h1>","  <form method=\"POST\" action=\"{{ route('posts.store') }}\">","      @csrf","      <div>","          <label>","            コメント:","            <input type=\"text\" name=\"comment\">","          </label>","      </div>"," ","      <input type=\"submit\" value=\"投稿\">","  </form>","@endsection"]}],[{"start":{"row":6,"column":44},"end":{"row":6,"column":45},"action":"remove","lines":["s"],"id":3},{"start":{"row":6,"column":43},"end":{"row":6,"column":44},"action":"remove","lines":["t"]},{"start":{"row":6,"column":42},"end":{"row":6,"column":43},"action":"remove","lines":["s"]},{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"remove","lines":["o"]},{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"remove","lines":["p"]}],[{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"insert","lines":["u"],"id":4},{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"insert","lines":["s"]},{"start":{"row":6,"column":42},"end":{"row":6,"column":43},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":40},"end":{"row":6,"column":43},"action":"remove","lines":["use"],"id":5},{"start":{"row":6,"column":40},"end":{"row":6,"column":45},"action":"insert","lines":["users"]}],[{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"remove","lines":[":"],"id":6},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"remove","lines":["ト"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":15},"end":{"row":10,"column":15},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1638003677577,"hash":"b18144f06b0050b3333512b89af8a1e54e617208"}