<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schemaファサードのcreateメソッドを使用し、videosテーブルを作成
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id')->comment('動画ID');
            $table->integer('user_id')->unsigned()->index()->comment('ユーザID');
            $table->string('url', 11)->comment('URL');
            $table->integer('target_id')->unsigned()->comment('対象ID');
            $table->timestamps(); //登録日時・更新日時


            //ユーザIDの外部キー制約
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            //対象IDの外部キー制約
            $table->foreign('target_id')
            ->references('id')
            ->on('targets')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // videosテーブルを削除
        Schema::dropIfExists('videos');

    }
}
