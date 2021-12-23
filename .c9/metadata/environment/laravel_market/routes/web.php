{"changed":true,"filter":false,"title":"web.php","tooltip":"/laravel_market/routes/web.php","value":"<?php\n\n/*\n|--------------------------------------------------------------------------\n| Web Routes\n|--------------------------------------------------------------------------\n|\n| Here is where you can register web routes for your application. These\n| routes are loaded by the RouteServiceProvider within a group which\n| contains the \"web\" middleware group. Now create something great!\n|\n*/\n\nRoute::get('/', 'PostController@top');\n\nRoute::resource('posts', 'PostController');\n\nRoute::resource('likes','LikeController')->only(['index','store','destroy']);\n\nRoute::resource('stores', 'StoreController')->only([\n  'index', 'store', 'destroy'\n]);\n \nRoute::get('/store', 'StoreController@storeIndex');\n\nAuth::routes();\n\nRoute::get('/posts/{post}/edit_image', 'PostController@editImage')->name('posts.edit_image');\n \nRoute::patch('/posts/{post}/edit_image', 'PostController@updateImage')->name('posts.update_image');\n\nRoute::resource('users', 'UserController');\n\nRoute::get('users/{user}/edit_image','UserController@editImage')->name('users.edit_image');\n\nRoute::patch('users/{user}/edit_image','UserController@updateImage')->name('users.update_image');\n\nRoute::patch('/posts/{post}/toggle_like','PostController@toggleLike')->name('posts.toggle_like');\n\nRoute::get('posts/{post}','PostController@show')->name('posts.show');\n\nRoute::get('posts/{item}/confirm','PostController@postConfirm')->name('posts.confirm');\n\nRoute::post('posts/{item}/finish','PostController@postFinish')->name('posts.finish');\n\n\n","undoManager":{"mark":31,"position":31,"stack":[[{"start":{"row":41,"column":87},"end":{"row":42,"column":0},"action":"insert","lines":["",""],"id":5173},{"start":{"row":42,"column":0},"end":{"row":43,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":87},"action":"insert","lines":["Route::get('posts/{item}/confirm','PostController@postConfirm')->name('posts.confirm');"],"id":5174}],[{"start":{"row":43,"column":61},"end":{"row":43,"column":62},"action":"insert","lines":["s"],"id":5175}],[{"start":{"row":43,"column":61},"end":{"row":43,"column":62},"action":"remove","lines":["s"],"id":5176}],[{"start":{"row":43,"column":61},"end":{"row":43,"column":62},"action":"insert","lines":["S"],"id":5177},{"start":{"row":43,"column":62},"end":{"row":43,"column":63},"action":"insert","lines":["t"]},{"start":{"row":43,"column":63},"end":{"row":43,"column":64},"action":"insert","lines":["o"]},{"start":{"row":43,"column":64},"end":{"row":43,"column":65},"action":"insert","lines":["r"]},{"start":{"row":43,"column":65},"end":{"row":43,"column":66},"action":"insert","lines":["e"]}],[{"start":{"row":43,"column":89},"end":{"row":43,"column":90},"action":"insert","lines":["."],"id":5178}],[{"start":{"row":43,"column":89},"end":{"row":43,"column":90},"action":"remove","lines":["."],"id":5179}],[{"start":{"row":43,"column":89},"end":{"row":43,"column":90},"action":"insert","lines":["_"],"id":5180},{"start":{"row":43,"column":90},"end":{"row":43,"column":91},"action":"insert","lines":["s"]},{"start":{"row":43,"column":91},"end":{"row":43,"column":92},"action":"insert","lines":["t"]},{"start":{"row":43,"column":92},"end":{"row":43,"column":93},"action":"insert","lines":["o"]}],[{"start":{"row":43,"column":93},"end":{"row":43,"column":94},"action":"insert","lines":["r"],"id":5181},{"start":{"row":43,"column":94},"end":{"row":43,"column":95},"action":"insert","lines":["e"]}],[{"start":{"row":43,"column":32},"end":{"row":43,"column":33},"action":"insert","lines":["/"],"id":5182},{"start":{"row":43,"column":33},"end":{"row":43,"column":34},"action":"insert","lines":["s"]},{"start":{"row":43,"column":34},"end":{"row":43,"column":35},"action":"insert","lines":["t"]},{"start":{"row":43,"column":35},"end":{"row":43,"column":36},"action":"insert","lines":["o"]}],[{"start":{"row":43,"column":36},"end":{"row":43,"column":37},"action":"insert","lines":["r"],"id":5183},{"start":{"row":43,"column":37},"end":{"row":43,"column":38},"action":"insert","lines":["e"]}],[{"start":{"row":45,"column":22},"end":{"row":45,"column":23},"action":"remove","lines":["t"],"id":5184},{"start":{"row":45,"column":21},"end":{"row":45,"column":22},"action":"remove","lines":["s"]},{"start":{"row":45,"column":20},"end":{"row":45,"column":21},"action":"remove","lines":["o"]},{"start":{"row":45,"column":19},"end":{"row":45,"column":20},"action":"remove","lines":["p"]}],[{"start":{"row":45,"column":19},"end":{"row":45,"column":20},"action":"insert","lines":["i"],"id":5185},{"start":{"row":45,"column":20},"end":{"row":45,"column":21},"action":"insert","lines":["t"]},{"start":{"row":45,"column":21},"end":{"row":45,"column":22},"action":"insert","lines":["e"]},{"start":{"row":45,"column":22},"end":{"row":45,"column":23},"action":"insert","lines":["m"]}],[{"start":{"row":45,"column":9},"end":{"row":45,"column":10},"action":"remove","lines":["t"],"id":5186},{"start":{"row":45,"column":8},"end":{"row":45,"column":9},"action":"remove","lines":["e"]},{"start":{"row":45,"column":7},"end":{"row":45,"column":8},"action":"remove","lines":["g"]}],[{"start":{"row":45,"column":7},"end":{"row":45,"column":8},"action":"insert","lines":["P"],"id":5187},{"start":{"row":45,"column":8},"end":{"row":45,"column":9},"action":"insert","lines":["O"]},{"start":{"row":45,"column":9},"end":{"row":45,"column":10},"action":"insert","lines":["S"]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"insert","lines":["T"]}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":104},"action":"remove","lines":["Route::get('posts/{item}/confirm/store','PostController@postConfirmStore')->name('posts.confirm_store');"],"id":5188},{"start":{"row":42,"column":0},"end":{"row":43,"column":0},"action":"remove","lines":["",""]},{"start":{"row":41,"column":87},"end":{"row":42,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":43,"column":10},"end":{"row":43,"column":11},"action":"remove","lines":["T"],"id":5189},{"start":{"row":43,"column":9},"end":{"row":43,"column":10},"action":"remove","lines":["S"]},{"start":{"row":43,"column":8},"end":{"row":43,"column":9},"action":"remove","lines":["O"]},{"start":{"row":43,"column":7},"end":{"row":43,"column":8},"action":"remove","lines":["P"]}],[{"start":{"row":43,"column":7},"end":{"row":43,"column":8},"action":"insert","lines":["p"],"id":5190},{"start":{"row":43,"column":8},"end":{"row":43,"column":9},"action":"insert","lines":["o"]},{"start":{"row":43,"column":9},"end":{"row":43,"column":10},"action":"insert","lines":["s"]},{"start":{"row":43,"column":10},"end":{"row":43,"column":11},"action":"insert","lines":["t"]}],[{"start":{"row":43,"column":85},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":5191},{"start":{"row":44,"column":0},"end":{"row":45,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":91},"action":"insert","lines":["Route::get('users/{user}/edit_image','UserController@editImage')->name('users.edit_image');"],"id":5192}],[{"start":{"row":45,"column":16},"end":{"row":45,"column":17},"action":"remove","lines":["s"],"id":5193},{"start":{"row":45,"column":15},"end":{"row":45,"column":16},"action":"remove","lines":["r"]},{"start":{"row":45,"column":14},"end":{"row":45,"column":15},"action":"remove","lines":["e"]},{"start":{"row":45,"column":13},"end":{"row":45,"column":14},"action":"remove","lines":["s"]},{"start":{"row":45,"column":12},"end":{"row":45,"column":13},"action":"remove","lines":["u"]}],[{"start":{"row":45,"column":12},"end":{"row":45,"column":13},"action":"insert","lines":["p"],"id":5194},{"start":{"row":45,"column":13},"end":{"row":45,"column":14},"action":"insert","lines":["o"]},{"start":{"row":45,"column":14},"end":{"row":45,"column":15},"action":"insert","lines":["s"]},{"start":{"row":45,"column":15},"end":{"row":45,"column":16},"action":"insert","lines":["t"]}],[{"start":{"row":45,"column":12},"end":{"row":45,"column":16},"action":"remove","lines":["post"],"id":5195},{"start":{"row":45,"column":12},"end":{"row":45,"column":17},"action":"insert","lines":["posts"]}],[{"start":{"row":45,"column":22},"end":{"row":45,"column":23},"action":"remove","lines":["r"],"id":5196},{"start":{"row":45,"column":21},"end":{"row":45,"column":22},"action":"remove","lines":["e"]},{"start":{"row":45,"column":20},"end":{"row":45,"column":21},"action":"remove","lines":["s"]},{"start":{"row":45,"column":19},"end":{"row":45,"column":20},"action":"remove","lines":["u"]}],[{"start":{"row":45,"column":19},"end":{"row":45,"column":20},"action":"insert","lines":["i"],"id":5197},{"start":{"row":45,"column":20},"end":{"row":45,"column":21},"action":"insert","lines":["t"]},{"start":{"row":45,"column":21},"end":{"row":45,"column":22},"action":"insert","lines":["e"]},{"start":{"row":45,"column":22},"end":{"row":45,"column":23},"action":"insert","lines":["m"]}],[{"start":{"row":45,"column":41},"end":{"row":45,"column":42},"action":"remove","lines":["r"],"id":5198},{"start":{"row":45,"column":40},"end":{"row":45,"column":41},"action":"remove","lines":["e"]},{"start":{"row":45,"column":39},"end":{"row":45,"column":40},"action":"remove","lines":["s"]},{"start":{"row":45,"column":38},"end":{"row":45,"column":39},"action":"remove","lines":["U"]}],[{"start":{"row":45,"column":38},"end":{"row":45,"column":39},"action":"insert","lines":["P"],"id":5199}],[{"start":{"row":45,"column":38},"end":{"row":45,"column":49},"action":"remove","lines":["PController"],"id":5200},{"start":{"row":45,"column":38},"end":{"row":45,"column":52},"action":"insert","lines":["PostController"]}],[{"start":{"row":45,"column":76},"end":{"row":45,"column":77},"action":"remove","lines":["s"],"id":5201},{"start":{"row":45,"column":75},"end":{"row":45,"column":76},"action":"remove","lines":["r"]},{"start":{"row":45,"column":74},"end":{"row":45,"column":75},"action":"remove","lines":["e"]},{"start":{"row":45,"column":73},"end":{"row":45,"column":74},"action":"remove","lines":["s"]},{"start":{"row":45,"column":72},"end":{"row":45,"column":73},"action":"remove","lines":["u"]}],[{"start":{"row":45,"column":72},"end":{"row":45,"column":73},"action":"insert","lines":["p"],"id":5202},{"start":{"row":45,"column":73},"end":{"row":45,"column":74},"action":"insert","lines":["o"]}],[{"start":{"row":45,"column":72},"end":{"row":45,"column":74},"action":"remove","lines":["po"],"id":5203},{"start":{"row":45,"column":72},"end":{"row":45,"column":77},"action":"insert","lines":["posts"]}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":91},"action":"remove","lines":["Route::get('posts/{item}/edit_image','PostController@editImage')->name('posts.edit_image');"],"id":5208}],[{"start":{"row":45,"column":3},"end":{"row":45,"column":4},"action":"remove","lines":["）"],"id":5210},{"start":{"row":45,"column":2},"end":{"row":45,"column":3},"action":"remove","lines":["略"]},{"start":{"row":45,"column":1},"end":{"row":45,"column":2},"action":"remove","lines":["省"]},{"start":{"row":45,"column":0},"end":{"row":45,"column":1},"action":"remove","lines":["（"]},{"start":{"row":44,"column":0},"end":{"row":45,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":45,"column":0},"end":{"row":48,"column":99},"action":"insert","lines":["（省略）","Route::get('/posts/{post}/edit_image', 'PostController@editImage')->name('posts.edit_image');"," ","Route::patch('/posts/{post}/edit_image', 'PostController@updateImage')->name('posts.update_image');"],"id":5210}]]},"ace":{"folds":[],"scrolltop":299.5,"scrollleft":0,"selection":{"start":{"row":43,"column":85},"end":{"row":43,"column":85},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1639633082850}