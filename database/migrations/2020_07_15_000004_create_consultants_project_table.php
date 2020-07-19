<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants_project', function (Blueprint $table){
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_project')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultants_project');
    }
}
