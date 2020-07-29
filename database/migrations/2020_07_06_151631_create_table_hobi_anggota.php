<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHobiAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobi_anggota', function (Blueprint $table) {
            // Create tabel hobi_anggota
            $table->integer('id_anggota')->unsigned()->index();
            $table->integer('id_hobi')->unsigned()->index();
            $table->timestamps();

            // Set PK
            $table->primary(['id_anggota', 'id_hobi']);

            // Set FK hobi_anggota --- anggota
            $table->foreign('id_anggota')
                  ->references('id')
                  ->on('anggota')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            // Set FK hobi_anggota --- hobi
            $table->foreign('id_hobi')
                  ->references('id')
                  ->on('hobi')
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
        Schema::dropIfExists('hobi_anggota');
    }
}
