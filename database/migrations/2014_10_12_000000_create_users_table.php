<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('introduction', '100')->default('自己紹介はまだ登録されていません。')->nullable();
            $table->string('icon_img')->default('https://inspiration-app-bucket.s3-ap-northeast-1.amazonaws.com/images/icons/noimage_icon.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('delete_flg')->default(0);
            $table->rememberToken();
            $table->timestamps();

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
