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
            $table->float('kilometer_awal');
            $table->float('kilometer_akhir')->nullable();
            $table->float('bbm_terpakai')->nullable();
            $table->string('tujuan');
            $table->string('durasi')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('tgl_pengajuan')->nullable();
            $table->dateTime('tgl_pengembalian')->nullable();
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