<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKelurahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kelurahan', 20);
            $table->timestamps();
        });

        // Set FK di kolom is_kelurahan di tabel anggota.
        Schema::table('anggota', function (Blueprint $table) {
            $table->foreign('id_kelurahan')
                  ->references('id')
                  ->on('kelurahan')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop FK di kolom id_kelurahan di tabel anggota
        Schema::table('anggota', function (Blueprint $table) {
            $table->dropForeign('anggota_id_kelurahan_foreign');
        });

        Schema::dropIfExists('kelurahan');
    }
}
