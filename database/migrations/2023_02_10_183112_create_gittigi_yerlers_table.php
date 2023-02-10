<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGittigiYerlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gittigi_yerlers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('depremzede_id');

            $table->timestamps();

            $table->foreign('depremzede_id')->on('depremzedes')->references('id')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gittigi_yerlers');
    }
}
