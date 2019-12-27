<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToCaseHolders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('case_holders', function (Blueprint $table) {
            $table->foreign('reported_case_id')
              ->references('id')->on('reported_cases')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('admin_user_id')
              ->references('id')->on('users')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('assigned_by')
              ->references('id')->on('users')
              ->onUpdate('cascade');

            $table->foreign('unassigned_by')
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
        Schema::table('case_holders', function (Blueprint $table) {
            $table->dropForeign(['unassigned_by']);

            $table->dropForeign(['assigned_by']);

            $table->dropForeign(['admin_user_id']);

            $table->dropForeign(['reported_case_id']);
        });
    }
}
