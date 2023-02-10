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
            $table->boolean('type');
            $table->boolean('gender')->nullable();
            $table->boolean('is_adult');
            $table->unsignedBigInteger('city_id');
            $table->date('death_date')->nullable();
            $table->dateTime('cikis_saati')->nullable();
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
        Schema::dropIfExists('depremzedes');
    }
}
