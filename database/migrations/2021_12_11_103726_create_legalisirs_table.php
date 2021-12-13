<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalisirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalisirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis')->unique()->nullable();
            $table->string('nomor_telp');
            $table->string('email');
            $table->string('perihal');
            $table->string('lampiran')->nullable();
            $table->string('date');
            $table->timestamp('konfirmasi_leges')->nullable();
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
        Schema::dropIfExists('legalisirs');
    }
}
