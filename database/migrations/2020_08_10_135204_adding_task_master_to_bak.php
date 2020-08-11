<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingTaskMasterToBak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bak', function (Blueprint $table) {
            $table->unsignedInteger('id_task');

            $table->foreign('id_task')->references('id')->on('task_master')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bak', function (Blueprint $table) {
            $table->dropforeign(['id_task']);
        });
    }
}
