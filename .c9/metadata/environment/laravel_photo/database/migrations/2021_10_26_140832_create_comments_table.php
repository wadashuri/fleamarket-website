{"filter":false,"title":"2021_10_26_140832_create_comments_table.php","tooltip":"/laravel_photo/database/migrations/2021_10_26_140832_create_comments_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;","","class CreateCommentsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('comments', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('comments');","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":36,"column":1},"action":"insert","lines":["<?php"," ","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;"," ","class CreateCommentsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('comments', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->unsignedBigInteger('post_id');","            $table->unsignedBigInteger('user_id');","            $table->string('body', 100);","            $table->timestamps();"," ","            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","        });","    }"," ","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('comments');","    }","}"]}]]},"ace":{"folds":[],"scrolltop":306,"scrollleft":0,"selection":{"start":{"row":36,"column":1},"end":{"row":36,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1635224961262,"hash":"8a940e3e3eda84b08bf40607cc3b831ba008d51f"}