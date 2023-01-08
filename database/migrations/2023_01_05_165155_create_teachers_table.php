<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');    //帳號編號
            $table->foreign('userid_id')->references('id')->on('users');
            $table->unsignedBigInteger('department_id');    //科系編號
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('team_id');  //班級編號
            $table->foreign('team_id')->references('id')->on('Teams');
            $table->string('name',20);
            $table->string('account',20);
            $table->string('password',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
