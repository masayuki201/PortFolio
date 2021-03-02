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
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id')->comment('動画ID');
            $table->string('user_id',16)->unsigned()->index()->comment('ユーザID');
            $table->string('url')->comment('URL');
            $table->string('target_id')->nullable()->comment('対象ID');
            $table->timestamps();

            //動画IDの外部キー制約
            $table->foreign('users')
            ->references('id')
            ->on('videos')
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
        Schema::dropIfExists('videos');
    }
}
