<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('warna');
            $table->string('transmisi');
            $table->string('no_hp');
            $table->integer('harga');
            $table->longText('deskripsi');
            $table->unsignedInteger('tipe_id');
            $table->foreign('tipe_id')->references('id')->on('tipes')->onDelete('CASCADE');
            $table->unsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks')->onDelete('CASCADE');
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
        Schema::dropIfExists('mobils');
    }
}
