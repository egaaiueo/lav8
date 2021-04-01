<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->integer('np');
            $table->string('asal');
            $table->string('nama');
            $table->integer('nik');
            $table->string('nomt');
            $table->integer('nohpt');
            $table->string('jk');
            $table->string('agm');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('jurusan');
            $table->string('email');
            $table->integer('nohp');
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
        Schema::dropIfExists('forms');
    }
}
