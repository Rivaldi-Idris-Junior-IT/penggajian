<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatagajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datagaji', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jabatan');
            $table->integer('gaji_pokok');
            $table->integer('uang_makan');
            $table->integer('tunjangan');
            $table->string('potongan_pph');
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
        Schema::dropIfExists('datagaji');
    }
}
