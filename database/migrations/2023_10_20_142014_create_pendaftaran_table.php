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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('id_pendaftaran');
            $table->string('nama_anak', 255);
            $table->string('jenis_kelamin', 20);
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->string('ig_anak', 255)->default(null);
            $table->string('nama_ortu', 255);
            $table->string('wa_ortu', 14);
            $table->string('ig_ortu', 255)->default(null);
            $table->text('alamat');
            $table->string('asal_sekolah', 255)->default(null);
            $table->string('level', 255)->default('Warior');
            $table->text('bukti_pembayaran');
            $table->char('status', 1)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
