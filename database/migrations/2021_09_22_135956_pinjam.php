<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pinjam extends Migration
{
    // /**
    //  * Run the migrations.
    //  *
    //  * @return void
    //  */
    // public function up()
    // {
    //     Schema::create('pinjam', function (Blueprint $table) {
    //         $table->id();
    //         $table->unsignedBigInteger('id_user');
    //         $table->foreign('id_user')->references('id')->on('user');
    //         $table->unsignedBigInteger('id_jenis_pinjam');
    //         $table->foreign('id_jenis_pinjam')->references('id')->on('jenis_pinjam');
    //         $table->bigInteger('besar_pinjam')->unsigned();
    //         $table->bigInteger('besar_angsuran')->unsigned();
    //         $table->tinyInteger('lama_angsuran')->unsigned();
    //         $table->bigInteger('sisa_angsuran')->unsigned();
    //         $table->bigInteger('sisa_pinjaman')->unsigned();
    //         $table->string('input_oleh');
    //         $table->date('tgl_tempo');
    //         $table->string('status');
    //         $table->timestamps();
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */
    // public function down()
    // {
    //     //
    // }
}
