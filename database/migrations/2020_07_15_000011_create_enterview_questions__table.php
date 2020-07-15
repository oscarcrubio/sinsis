<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterviewQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterview_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_enterview');
            $table->unsignedBigInteger('id_question');
            $table->foreign('id_enterview')->references('id')->on('enterviews');
            $table->foreign('id_question')->references('id')->on('questions');
            $table->string('answer');
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
        Schema::dropIfExists('enterview_questions');
    }
}
