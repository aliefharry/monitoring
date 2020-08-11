<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bak', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('tgl_serah');
            $table->string('pic_serah');
            $table->string('foto');
            $table->dateTime('update');
            $table->string('update_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bak');
    }
}
