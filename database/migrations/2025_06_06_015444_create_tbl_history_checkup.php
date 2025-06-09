<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_history_checkup', function (Blueprint $table) {
            $table->id();
            $table->string('id_mcu')->unique();
            $table->string('nama_pasien');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('provider');
            $table->string('nik')->unique();
            $table->date('tanggal_mcu');
            $table->string('status_mcu');
            $table->string('link_hasil_mcu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_history_checkup');
    }
};
