<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_documents', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('reported_case_id')->nullable();
            $table->unsignedBigInteger('case_upload_id')->nullable();
            $table->unsignedBigInteger('document_id');

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
        Schema::dropIfExists('case_documents');
    }
}
