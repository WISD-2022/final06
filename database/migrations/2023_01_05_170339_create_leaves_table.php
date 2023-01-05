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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();   //編號
            $table->unsignedBigInteger('student_id');    //科系編號
            $table->foreign('student_id')->references('id')->on('students');
            $table->date('application_date');    //申請日期
            $table->integer('leave');  //假別 1=事假 2=病假 3=公假
            $table->string('reason',255);   //事由
            $table->string('picture',255);  //證明文件
            $table->date('start_time'); //開始日期
            $table->date('end_time');   //結束日期
            $table->integer('check')->default(0);   //審核結果 0=審核中 1=通過 2=不通過
            $table->string('opinion',255)->nullable(); //審核意見
            $table->date('check_date')->nullable(); //審核日期
            $table->string('remark',255);   //備註
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
};
