<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('NIK')->nullable();
            $table->string('name');
            $table->string('hp')->nullable();
            $table->string('email')->unique();
            $table->string('alamat')->nullable();
            $table->string('tanggallahir')->nullable();
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('status')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('time')->nullable();
            $table->string('sertif1')->nullable();
            $table->string('sertif2')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
