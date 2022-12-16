<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama')->nullable();
            $table->date('tanggal_mulai_berlaku')->nullable();
            $table->date('tanggal_kadaluarsa')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('promos');
    }
}
