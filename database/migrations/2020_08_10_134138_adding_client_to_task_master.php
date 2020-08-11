<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingClientToTaskMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_master', function (Blueprint $table) {
            $table->unsignedInteger('id_client');

            $table->foreign('id_client')->references('id')->on('client')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_master', function (Blueprint $table) {
            $table->dropforeign(['id_client']);
        });
    }
}
