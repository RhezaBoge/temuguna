<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsersDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_users_detail', function (Blueprint $table) {
            $table->increments('users_detail_id');
            $table->integer('users_id');
            $table->integer('users_group_id');
            $table->char('users_telp',15);
            $table->softDeletes();
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
        Schema::drop('table_users_detail');
    }
}
