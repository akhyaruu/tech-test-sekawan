<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('mobil_id')->constrained('cars');
            $table->integer('kilometer_awal');
            $table->integer('kilometer_akhir');
            $table->float('bbm_terpakai');
            $table->string('tujuan');
            $table->string('durasi');
            $table->dateTime('tgl_pengajuan');
            $table->dateTime('tgl_pengembalian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}