<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name', 255);
            $table->string('description', 1000);
            $table->bigIncrements('category_id');
            $table->integer('price');
            $table->string('image', 100);
            $table->timestamps();
        });
    }
// id	bigint(20)	id	A_I
// user_id	bigint(20)	ユーザー ID	外部キー
// name	varchar(255)	商品名	
// description	varchar(1000)	商品の説明	
// category_id	bigint(20)	カテゴリ ID	外部キー
// price	int(11)	価格	
// image	varchar(100)	商品画像ファイル名	
// created_at	timestamp	作成日時	
// updated_at	timestamp	更新日時	





    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
