{"filter":false,"title":"edit.blade.php","tooltip":"/laravel_market/resources/views/users/edit.blade.php","undoManager":{"mark":81,"position":81,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.logged_in')"," ","@section('title', $title)"," ","@section('content')","  <h1>{{ $title }}</h1>","@endsection"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"remove","lines":["@extends('layouts.logged_in')"," ","@section('title', $title)"," ","@section('content')","  <h1>{{ $title }}</h1>","@endsection"],"id":8},{"start":{"row":0,"column":0},"end":{"row":17,"column":11},"action":"insert","lines":["@extends('layouts.logged_in')"," ","@section('title', $title)"," ","@section('content')","  <h1>{{ $title }}</h1>","  <form method=\"POST\" action=\"{{ route('posts.store') }}\">","      @csrf","      <div>","          <label>","            コメント:","            <input type=\"text\" name=\"comment\">","          </label>","      </div>"," ","      <input type=\"submit\" value=\"投稿\">","  </form>","@endsection"]}],[{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"remove","lines":[":"],"id":13},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"remove","lines":["ト"]}],[{"start":{"row":6,"column":50},"end":{"row":6,"column":51},"action":"remove","lines":["e"],"id":14},{"start":{"row":6,"column":49},"end":{"row":6,"column":50},"action":"remove","lines":["r"]},{"start":{"row":6,"column":48},"end":{"row":6,"column":49},"action":"remove","lines":["o"]},{"start":{"row":6,"column":47},"end":{"row":6,"column":48},"action":"remove","lines":["t"]},{"start":{"row":6,"column":46},"end":{"row":6,"column":47},"action":"remove","lines":["s"]}],[{"start":{"row":6,"column":44},"end":{"row":6,"column":45},"action":"remove","lines":["s"],"id":15},{"start":{"row":6,"column":43},"end":{"row":6,"column":44},"action":"remove","lines":["t"]},{"start":{"row":6,"column":42},"end":{"row":6,"column":43},"action":"remove","lines":["s"]},{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"remove","lines":["o"]},{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"remove","lines":["p"]}],[{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"insert","lines":["u"],"id":16}],[{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"remove","lines":["u"],"id":17},{"start":{"row":6,"column":40},"end":{"row":6,"column":45},"action":"insert","lines":["users"]}],[{"start":{"row":6,"column":46},"end":{"row":6,"column":47},"action":"insert","lines":["u"],"id":18},{"start":{"row":6,"column":47},"end":{"row":6,"column":48},"action":"insert","lines":["p"]}],[{"start":{"row":6,"column":46},"end":{"row":6,"column":48},"action":"remove","lines":["up"],"id":19},{"start":{"row":6,"column":46},"end":{"row":6,"column":52},"action":"insert","lines":["update"]}],[{"start":{"row":6,"column":53},"end":{"row":6,"column":54},"action":"insert","lines":["$"],"id":20},{"start":{"row":6,"column":54},"end":{"row":6,"column":55},"action":"insert","lines":["u"]},{"start":{"row":6,"column":55},"end":{"row":6,"column":56},"action":"insert","lines":["s"]},{"start":{"row":6,"column":56},"end":{"row":6,"column":57},"action":"insert","lines":["e"]},{"start":{"row":6,"column":57},"end":{"row":6,"column":58},"action":"insert","lines":["r"]}],[{"start":{"row":7,"column":11},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":8,"column":0},"end":{"row":8,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["`"],"id":22}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["`"],"id":23}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["`"],"id":24}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["`"],"id":25}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["`"],"id":26}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"remove","lines":["`"],"id":27}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["@"],"id":28},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["m"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":7},"end":{"row":8,"column":9},"action":"remove","lines":["me"],"id":29},{"start":{"row":8,"column":7},"end":{"row":8,"column":13},"action":"insert","lines":["method"]}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["("],"id":30},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["'"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["P"]}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["P"],"id":31}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["p"],"id":32},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["a"]}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":17},"action":"remove","lines":["pa"],"id":33},{"start":{"row":8,"column":15},"end":{"row":8,"column":20},"action":"insert","lines":["patch"]}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":["'"],"id":34},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":[")"]}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["o"],"id":35},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"remove","lines":["t"],"id":36},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["o"]}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["t"],"id":37},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["o"]}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"remove","lines":["o"],"id":38},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["t"]}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["ン"],"id":39},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":["メ"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":["コ"]}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":16},"action":"insert","lines":["コメント"],"id":40}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["："],"id":41}],[{"start":{"row":12,"column":43},"end":{"row":12,"column":44},"action":"remove","lines":["t"],"id":42},{"start":{"row":12,"column":42},"end":{"row":12,"column":43},"action":"remove","lines":["n"]},{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"remove","lines":["e"]},{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"remove","lines":["m"]},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"remove","lines":["m"]},{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"remove","lines":["o"]},{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"remove","lines":["c"]}],[{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"insert","lines":["p"],"id":43}],[{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"remove","lines":["p"],"id":44},{"start":{"row":12,"column":37},"end":{"row":12,"column":44},"action":"insert","lines":["profile"]}],[{"start":{"row":12,"column":45},"end":{"row":12,"column":46},"action":"insert","lines":[" "],"id":45},{"start":{"row":12,"column":46},"end":{"row":12,"column":47},"action":"insert","lines":["v"]}],[{"start":{"row":12,"column":46},"end":{"row":12,"column":47},"action":"remove","lines":["v"],"id":46},{"start":{"row":12,"column":46},"end":{"row":12,"column":51},"action":"insert","lines":["value"]}],[{"start":{"row":12,"column":51},"end":{"row":12,"column":52},"action":"insert","lines":["="],"id":47}],[{"start":{"row":12,"column":52},"end":{"row":12,"column":54},"action":"insert","lines":["\"\""],"id":48}],[{"start":{"row":12,"column":53},"end":{"row":12,"column":54},"action":"insert","lines":["$"],"id":49},{"start":{"row":12,"column":54},"end":{"row":12,"column":55},"action":"insert","lines":["u"]},{"start":{"row":12,"column":55},"end":{"row":12,"column":56},"action":"insert","lines":["s"]},{"start":{"row":12,"column":56},"end":{"row":12,"column":57},"action":"insert","lines":["e"]},{"start":{"row":12,"column":57},"end":{"row":12,"column":58},"action":"insert","lines":["r"]}],[{"start":{"row":12,"column":58},"end":{"row":12,"column":59},"action":"insert","lines":["-"],"id":50},{"start":{"row":12,"column":59},"end":{"row":12,"column":60},"action":"insert","lines":[">"]}],[{"start":{"row":12,"column":60},"end":{"row":12,"column":61},"action":"insert","lines":["p"],"id":51}],[{"start":{"row":12,"column":60},"end":{"row":12,"column":61},"action":"remove","lines":["p"],"id":52},{"start":{"row":12,"column":60},"end":{"row":12,"column":67},"action":"insert","lines":["profile"]}],[{"start":{"row":12,"column":53},"end":{"row":12,"column":54},"action":"insert","lines":["{"],"id":53},{"start":{"row":12,"column":54},"end":{"row":12,"column":55},"action":"insert","lines":["{"]}],[{"start":{"row":12,"column":69},"end":{"row":12,"column":70},"action":"insert","lines":["{"],"id":54}],[{"start":{"row":12,"column":69},"end":{"row":12,"column":70},"action":"remove","lines":["{"],"id":55}],[{"start":{"row":12,"column":69},"end":{"row":12,"column":70},"action":"insert","lines":["}"],"id":56},{"start":{"row":12,"column":70},"end":{"row":12,"column":71},"action":"insert","lines":["}"]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":[" "],"id":57},{"start":{"row":14,"column":12},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":53},"end":{"row":6,"column":54},"action":"insert","lines":[","],"id":58}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["ト"],"id":59},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["ン"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":["メ"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":["コ"]}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["p"],"id":60},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["u"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["r"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["o"]}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["o"],"id":61},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["r"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":["u"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":["p"]}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":18},"action":"insert","lines":["プロフィール"],"id":62}],[{"start":{"row":10,"column":17},"end":{"row":11,"column":12},"action":"insert","lines":["","            "],"id":63}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["n"],"id":64},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["a"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["m"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["a"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"remove","lines":["e"],"id":65},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["a"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["m"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":["a"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":["n"]}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":12},"action":"remove","lines":["  "],"id":66},{"start":{"row":11,"column":8},"end":{"row":11,"column":10},"action":"remove","lines":["  "]},{"start":{"row":11,"column":6},"end":{"row":11,"column":8},"action":"remove","lines":["  "]},{"start":{"row":11,"column":4},"end":{"row":11,"column":6},"action":"remove","lines":["  "]},{"start":{"row":11,"column":2},"end":{"row":11,"column":4},"action":"remove","lines":["  "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":2},"action":"remove","lines":["  "]}],[{"start":{"row":10,"column":17},"end":{"row":11,"column":0},"action":"remove","lines":["",""],"id":67}],[{"start":{"row":9,"column":11},"end":{"row":10,"column":8},"action":"insert","lines":["","        "],"id":68}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":["<"],"id":69},{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["l"]},{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["a"]},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["b"]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"insert","lines":["l"],"id":70}],[{"start":{"row":10,"column":14},"end":{"row":10,"column":23},"action":"insert","lines":["></label>"],"id":71}],[{"start":{"row":10,"column":15},"end":{"row":12,"column":8},"action":"insert","lines":["","          ","        "],"id":72}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":12},"action":"insert","lines":["名前"],"id":73}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["："],"id":74}],[{"start":{"row":11,"column":13},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":75},{"start":{"row":12,"column":0},"end":{"row":12,"column":10},"action":"insert","lines":["          "]}],[{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":[","],"id":76}],[{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"remove","lines":[","],"id":77}],[{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":["<"],"id":78},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["i"]},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["n"]},{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"insert","lines":["p"]},{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"insert","lines":["u"]},{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["t"]}],[{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"insert","lines":[" "],"id":79},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["t"]},{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"insert","lines":["y"]},{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"insert","lines":["p"]},{"start":{"row":12,"column":20},"end":{"row":12,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":21},"end":{"row":12,"column":22},"action":"insert","lines":["="],"id":80}],[{"start":{"row":12,"column":22},"end":{"row":12,"column":24},"action":"insert","lines":["\"\""],"id":81}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["t"],"id":82},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":25},"action":"remove","lines":["te"],"id":83},{"start":{"row":12,"column":23},"end":{"row":12,"column":27},"action":"insert","lines":["text"]}],[{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":[" "],"id":84},{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"insert","lines":["n"]},{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"insert","lines":["a"]},{"start":{"row":12,"column":31},"end":{"row":12,"column":32},"action":"insert","lines":["m"]},{"start":{"row":12,"column":32},"end":{"row":12,"column":33},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":33},"end":{"row":12,"column":34},"action":"insert","lines":["="],"id":85}],[{"start":{"row":12,"column":34},"end":{"row":12,"column":36},"action":"insert","lines":["\"\""],"id":86}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"insert","lines":["n"],"id":87},{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["a"]},{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"insert","lines":["m"]},{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"insert","lines":[" "],"id":88},{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"insert","lines":["v"]},{"start":{"row":12,"column":42},"end":{"row":12,"column":43},"action":"insert","lines":["a"]}],[{"start":{"row":12,"column":41},"end":{"row":12,"column":43},"action":"remove","lines":["va"],"id":89},{"start":{"row":12,"column":41},"end":{"row":12,"column":46},"action":"insert","lines":["value"]}],[{"start":{"row":12,"column":41},"end":{"row":12,"column":46},"action":"remove","lines":["value"],"id":90},{"start":{"row":12,"column":41},"end":{"row":12,"column":68},"action":"insert","lines":["value=\"{{$user->profile}}\">"]}],[{"start":{"row":12,"column":63},"end":{"row":12,"column":64},"action":"remove","lines":["e"],"id":91},{"start":{"row":12,"column":62},"end":{"row":12,"column":63},"action":"remove","lines":["l"]},{"start":{"row":12,"column":61},"end":{"row":12,"column":62},"action":"remove","lines":["i"]},{"start":{"row":12,"column":60},"end":{"row":12,"column":61},"action":"remove","lines":["f"]},{"start":{"row":12,"column":59},"end":{"row":12,"column":60},"action":"remove","lines":["o"]},{"start":{"row":12,"column":58},"end":{"row":12,"column":59},"action":"remove","lines":["r"]},{"start":{"row":12,"column":57},"end":{"row":12,"column":58},"action":"remove","lines":["p"]}],[{"start":{"row":12,"column":57},"end":{"row":12,"column":58},"action":"insert","lines":["n"],"id":92},{"start":{"row":12,"column":58},"end":{"row":12,"column":59},"action":"insert","lines":["a"]},{"start":{"row":12,"column":59},"end":{"row":12,"column":60},"action":"insert","lines":["m"]},{"start":{"row":12,"column":60},"end":{"row":12,"column":61},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":73.5,"scrollleft":0,"selection":{"start":{"row":21,"column":11},"end":{"row":21,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":13,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1638531537046,"hash":"51d52991f24fce2ceb90c1e93ebd994fab089694"}