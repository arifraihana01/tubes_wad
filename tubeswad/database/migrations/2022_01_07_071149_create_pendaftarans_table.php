<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id');
            // $table->index('user_id');
            // $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('name');
            $table->string('NIK');
            $table->string('alamat');
            $table->string('tanggal')->nullable();
            $table->string('time')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
}
