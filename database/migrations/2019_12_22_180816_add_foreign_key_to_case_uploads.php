<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToCaseUploads extends Migration
{
    public function up()
    {
        Schema::table('case_uploads', function (Blueprint $table) {
            $table->foreign('reported_case_id')
              ->references('id')->on('reported_cases')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('uploaded_by')
              ->references('id')->on('users')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('approved_visible_by')
              ->references('id')->on('users')
              ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('case_uploads', function (Blueprint $table) {
            $table->dropForeign(['reported_case_id']);
            $table->dropForeign(['uploaded_by']);
            $table->dropForeign(['approved_visible_by']);
        });
    }
}
