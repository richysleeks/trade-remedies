<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToAdminUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_users', function (Blueprint $table) {
            $table->foreign('department')
              ->references('id')->on('departments')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('position')
              ->references('id')->on('positions')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('created_by')
              ->references('id')->on('users')
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
        Schema::table('admin_users', function (Blueprint $table) {
            $table->dropForeign(['department']);
            $table->dropForeign(['position']);
            $table->dropForeign(['created_by']);
        });
    }
}
