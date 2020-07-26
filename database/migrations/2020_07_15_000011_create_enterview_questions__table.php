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
            $table->unsignedBigInteger('enterview_id');
            $table->unsignedBigInteger('question_id');
            $table->foreign('enterview_id')->references('id')->on('enterviews');
            $table->foreign('question_id')->references('id')->on('questions');
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
