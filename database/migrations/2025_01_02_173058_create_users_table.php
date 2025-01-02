<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            $table->string('name', 100);
            $table->uuid('divisi_id');
            $table->uuid('jabatan_id');
            $table->string('username', 100)->unique();
            $table->string('password');
            $table->boolean('status_aktivasi')->default(0);
            $table->timestamps();

            $table->foreign('divisi_id')->references('divisi_id')->on('divisi');
            $table->foreign('jabatan_id')->references('jabatan_id')->on('jabatan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
