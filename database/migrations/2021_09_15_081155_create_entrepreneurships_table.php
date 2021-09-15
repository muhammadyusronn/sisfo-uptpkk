<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepreneurshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrepreneurships', function (Blueprint $table) {
            $table->bigIncrements('kewirausahaan_id');
            $table->string('kewirausahaan_judul');
            $table->string('kewirausahaan_slug');
            $table->string('kewirausahaan_tanggal');
            $table->text('kewirausahaan_konten');
            $table->string('kewirausahaan_foto');
            $table->unsignedBigInteger('kewirausahaan_author');
            $table->boolean('kewirausahaan_status');
            $table->string('kewirausahaan_kategori');
            $table->timestamps();
            $table->foreign('kewirausahaan_author')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrepreneurships');
    }
}
