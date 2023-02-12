<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepremzedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depremzedes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('tc_no')->nullable();
            $table->string('yas')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->boolean('type')->nullable();
            $table->boolean('gender')->nullable();
            $table->boolean('recognizability')->nullable();
            $table->tinyInteger('is_adult')->nullable();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('district_id');
            $table->dateTime('date')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('sehirs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depremzedes');
    }
}
