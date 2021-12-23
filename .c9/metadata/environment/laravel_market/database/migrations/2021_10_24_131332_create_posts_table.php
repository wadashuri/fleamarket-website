{"filter":false,"title":"2021_10_24_131332_create_posts_table.php","tooltip":"/laravel_market/database/migrations/2021_10_24_131332_create_posts_table.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;","","class CreatePostsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('posts', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('posts');","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":37,"column":1},"action":"insert","lines":["<?php"," ","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;"," ","class CreatePostsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('posts', function (Blueprint $table) {","            $table->bigIncrements('id');","            // usersのidと同じデータ型に設定する","            // bigIncrementsで設定されるデータ型はunsignedBigInteger","            $table->unsignedBigInteger('user_id');","            $table->string('comment', 200);","            $table->string('image', 100);","            $table->timestamps();","            // user_id は users の id に対して外部キー制約を設定","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","        });","    }"," ","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('posts');","    }","}"]}],[{"start":{"row":16,"column":25},"end":{"row":16,"column":26},"action":"insert","lines":["å"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":37,"column":1},"action":"remove","lines":["<?php"," ","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;"," ","class CreatePostsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('posts', function (Blueprint $table) {","            $table->bigInåcrements('id');","            // usersのidと同じデータ型に設定する","            // bigIncrementsで設定されるデータ型はunsignedBigInteger","            $table->unsignedBigInteger('user_id');","            $table->string('comment', 200);","            $table->string('image', 100);","            $table->timestamps();","            // user_id は users の id に対して外部キー制約を設定","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","        });","    }"," ","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('posts');","    }","}"],"id":4},{"start":{"row":0,"column":0},"end":{"row":37,"column":1},"action":"insert","lines":["<?php"," ","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;"," ","class CreatePostsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('posts', function (Blueprint $table) {","            $table->bigIncrements('id');","            // usersのidと同じデータ型に設定する","            // bigIncrementsで設定されるデータ型はunsignedBigInteger","            $table->unsignedBigInteger('user_id');","            $table->string('comment', 200);","            $table->string('image', 100);","            $table->timestamps();","            // user_id は users の id に対して外部キー制約を設定","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","        });","    }"," ","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('posts');","    }","}"]}],[{"start":{"row":23,"column":12},"end":{"row":24,"column":91},"action":"remove","lines":["// user_id は users の id に対して外部キー制約を設定","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');"],"id":5},{"start":{"row":23,"column":12},"end":{"row":24,"column":91},"action":"insert","lines":["// user_id は users の id に対して外部キー制約を設定","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');"]}]]},"ace":{"folds":[],"scrolltop":336,"scrollleft":0,"selection":{"start":{"row":24,"column":91},"end":{"row":24,"column":91},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1635493201745,"hash":"d9bcdfd012ecf777f4bd8344a9816769f5c2102e"}