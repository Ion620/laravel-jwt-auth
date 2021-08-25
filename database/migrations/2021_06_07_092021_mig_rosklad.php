<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigRosklad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rosklad', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_group')->unsigned();
            $table->foreign('id_group')
                ->references('id')->on('group')
                ->onDelete('cascade');
            $table->bigInteger('id_subj')->unsigned();
            $table->foreign('id_subj')
                ->references('id')->on('subj')
                ->onDelete('cascade');
            $table->bigInteger('id_teacher')->unsigned();
            $table->foreign('id_teacher')
                ->references('id')->on('teacher')
                ->onDelete('cascade');
            $table->bigInteger('id_aud')->unsigned();
            $table->foreign('id_aud')
                ->references('id')->on('auditor')
                ->onDelete('cascade');
            $table->integer('numb_lec');
            $table->integer('day');
            $table->
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
        Schema::dropIfExists('rosklad');
    }
}
