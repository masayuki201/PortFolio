<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schemaファサードのcreateメソッドを使用し、targetsテーブルを作成
        Schema::create('targets', function (Blueprint $table) {
            $table->increments('id')->comment('対象ID');
            $table->string('target_grade', 10)->comment('対象学年');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // targetsテーブルを削除
        Schema::dropIfExists('targets');
    }
}
