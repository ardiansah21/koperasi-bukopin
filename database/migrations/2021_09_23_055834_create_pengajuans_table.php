<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_jenis_pinjam');
            $table->foreign('id_jenis_pinjam')->references('id')->on('jenis_pinjam');
            $table->bigInteger('besar_pinjam')->unsigned();
            $table->date('tanggal_konfirmasi');
            $table->string('status');
            $table->string('no_ktp');
            $table->string('nip');
            $table->string('jabatan');
            $table->tinyInteger('jangka_waktu')->unsigned();
            $table->string('kebutuhan');
            $table->string('jaminan');
            $table->string('outstanding');
            $table->string('angsuran');
            $table->string('tujuan_pengajuan');
            $table->string('jenis_pengajuan');
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
        Schema::dropIfExists('pengajuan');
    }
}
