<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('ユーザID');
            $table->string('nickname',16)->comment('ニックネーム');
            $table->string('email', 128)->comment('メールアドレス')->unique()->safeEmail;
            $table->string('password', 64)->comment('パスワード');
            $table->char('delete_flag', 1)->default(0)->comment('deleteフラグ');
            $table->rememberToken();
            $table->timestamps();
<<<<<<< HEAD:database/migrations/2021_02_24_174653_create_users_table.php

=======
>>>>>>> develop:database/migrations/2021_02_22_174653_create_users_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
