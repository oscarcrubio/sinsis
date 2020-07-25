<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingKeysProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('id_enterview')->nullable();
            $table->unsignedBigInteger('id_proposal')->nullable();
            $table->unsignedBigInteger('id_enterprise')->nullable();
            $table->foreign('id_enterview')->references('id')->on('enterviews');
            $table->foreign('id_proposal')->references('id')->on('proposals');
            $table->foreign('id_enterprise')->references('id')->on('enterprises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
