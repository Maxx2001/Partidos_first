<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_one_id');
            $table->foreignId('user_two_id');
            $table->integer('status');
            $table->foreignId('initiative_user');
            $table->timestamps();

            $table->foreign('user_one_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('user_two_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('initiative_user')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('friends');
    }
}
