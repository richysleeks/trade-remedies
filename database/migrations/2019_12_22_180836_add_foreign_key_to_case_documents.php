<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToCaseDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('case_documents', function (Blueprint $table) {
            $table->foreign('reported_case_id')
              ->references('id')->on('reported_cases')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('case_upload_id')
              ->references('id')->on('case_uploads')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('document_id')
              ->references('id')->on('documents')
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
        Schema::table('case_documents', function (Blueprint $table) {
            $table->dropForeign(['reported_case_id']);
            $table->dropForeign(['case_upload_id']);
            $table->dropForeign(['document_id']);
        });
    }
}
