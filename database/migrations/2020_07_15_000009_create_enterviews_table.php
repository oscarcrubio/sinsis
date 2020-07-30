<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_consultor');
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_consultor')->references('id')->on('users');
            $table->foreign('id_project')->references('id')->on('projects');
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
        Schema::dropIfExists('enterviews');
    }
}
