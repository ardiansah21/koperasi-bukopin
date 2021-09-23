<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisPinjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pinjam', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->tinyInteger('lama_angsuran')->unsigned();
            $table->bigInteger('maks_pinjam')->unsigned();
            $table->smallInteger('bunga')->unsigned();
            $table->string('input_oleh');
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
        Schema::dropIfExists('jenis_pinjaman');
    }
}
