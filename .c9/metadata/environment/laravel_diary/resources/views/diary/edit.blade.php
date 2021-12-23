{"filter":false,"title":"edit.blade.php","tooltip":"/laravel_diary/resources/views/diary/edit.blade.php","undoManager":{"mark":39,"position":39,"stack":[[{"start":{"row":0,"column":0},"end":{"row":4,"column":19},"action":"insert","lines":["@extends('layouts.default')"," ","@section('title', $title)"," ","@section('content')"],"id":1}],[{"start":{"row":4,"column":19},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":6,"column":0},"end":{"row":8,"column":18},"action":"insert","lines":["<form action=\"{{ url('/diaries/' . $diary->id) }}\" method=\"post\">","  @csrf","  @method('PATCH')"],"id":3}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":21},"action":"insert","lines":["<h1>{{ $title }}</h1>"],"id":4}],[{"start":{"row":8,"column":18},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":9,"column":0},"end":{"row":9,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":9,"column":2},"end":{"row":24,"column":11},"action":"insert","lines":["  <div>","            <label>","                名前:","                <input type=\"text\" name=\"title\" class=\"title_field\" placeholder=\"お名前を入力\">","            </label>","        </div>","        <div>","            <label>","                コメント：","                <input type=\"text\" name=\"log\" class=\"loh_field\" placeholder=\"コメントを入力\">","            </label>","        </div>","        <div>","            <input type=\"submit\" value=\"投稿\">","        </div>","    </form>"],"id":6}],[{"start":{"row":24,"column":11},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":4},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":15},"action":"insert","lines":["@endsection"],"id":8}],[{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"remove","lines":["h"],"id":9}],[{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"insert","lines":["g"],"id":10}],[{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"remove","lines":["稿"],"id":11},{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"remove","lines":["投"]}],[{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"insert","lines":["h"],"id":12},{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"insert","lines":["o"]}],[{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"remove","lines":["o"],"id":13},{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"remove","lines":["h"]}],[{"start":{"row":22,"column":40},"end":{"row":22,"column":42},"action":"insert","lines":["保存"],"id":14}],[{"start":{"row":22,"column":40},"end":{"row":22,"column":42},"action":"remove","lines":["保存"],"id":15},{"start":{"row":22,"column":40},"end":{"row":22,"column":42},"action":"insert","lines":["投稿"]}],[{"start":{"row":12,"column":68},"end":{"row":12,"column":88},"action":"remove","lines":["placeholder=\"お名前を入力\""],"id":16,"ignore":true}],[{"start":{"row":12,"column":68},"end":{"row":12,"column":74},"action":"insert","lines":["value="],"id":17,"ignore":true}],[{"start":{"row":12,"column":74},"end":{"row":12,"column":76},"action":"insert","lines":["\"\""],"id":18,"ignore":true}],[{"start":{"row":12,"column":75},"end":{"row":12,"column":78},"action":"insert","lines":["{{}"],"id":19,"ignore":true}],[{"start":{"row":12,"column":78},"end":{"row":12,"column":79},"action":"insert","lines":["}"],"id":20,"ignore":true}],[{"start":{"row":12,"column":77},"end":{"row":12,"column":83},"action":"insert","lines":["$diary"],"id":21,"ignore":true}],[{"start":{"row":12,"column":83},"end":{"row":12,"column":85},"action":"insert","lines":["->"],"id":22,"ignore":true}],[{"start":{"row":12,"column":85},"end":{"row":12,"column":89},"action":"insert","lines":["name"],"id":23,"ignore":true}],[{"start":{"row":18,"column":64},"end":{"row":18,"column":75},"action":"remove","lines":["placeholder"],"id":24,"ignore":true},{"start":{"row":18,"column":64},"end":{"row":18,"column":66},"action":"insert","lines":["va"]}],[{"start":{"row":18,"column":66},"end":{"row":18,"column":69},"action":"insert","lines":["lue"],"id":25,"ignore":true}],[{"start":{"row":18,"column":74},"end":{"row":18,"column":78},"action":"remove","lines":["トを入力"],"id":26,"ignore":true}],[{"start":{"row":18,"column":71},"end":{"row":18,"column":74},"action":"remove","lines":["コメン"],"id":27,"ignore":true}],[{"start":{"row":18,"column":71},"end":{"row":18,"column":73},"action":"insert","lines":["{{"],"id":28,"ignore":true}],[{"start":{"row":18,"column":73},"end":{"row":18,"column":75},"action":"insert","lines":["}}"],"id":29,"ignore":true}],[{"start":{"row":18,"column":73},"end":{"row":18,"column":76},"action":"insert","lines":["$di"],"id":30,"ignore":true}],[{"start":{"row":18,"column":76},"end":{"row":18,"column":77},"action":"insert","lines":["a"],"id":31,"ignore":true}],[{"start":{"row":18,"column":77},"end":{"row":18,"column":79},"action":"insert","lines":["ry"],"id":32,"ignore":true}],[{"start":{"row":18,"column":79},"end":{"row":18,"column":81},"action":"insert","lines":["->"],"id":33,"ignore":true}],[{"start":{"row":18,"column":81},"end":{"row":18,"column":84},"action":"insert","lines":["log"],"id":34,"ignore":true}],[{"start":{"row":12,"column":85},"end":{"row":12,"column":89},"action":"remove","lines":["name"],"id":35,"ignore":true}],[{"start":{"row":12,"column":85},"end":{"row":12,"column":89},"action":"insert","lines":["titl"],"id":36,"ignore":true}],[{"start":{"row":12,"column":89},"end":{"row":12,"column":90},"action":"insert","lines":["e"],"id":37,"ignore":true}],[{"start":{"row":22,"column":42},"end":{"row":22,"column":43},"action":"insert","lines":["{"],"id":38},{"start":{"row":22,"column":43},"end":{"row":22,"column":44},"action":"insert","lines":["{"]}],[{"start":{"row":22,"column":43},"end":{"row":22,"column":44},"action":"remove","lines":["{"],"id":39},{"start":{"row":22,"column":42},"end":{"row":22,"column":43},"action":"remove","lines":["{"]}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":8},"action":"remove","lines":["    "],"id":40}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":26,"column":15},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1637486772203,"hash":"2fc6354d2de004bd20c5411adcb9a0d22c9e34d0"}