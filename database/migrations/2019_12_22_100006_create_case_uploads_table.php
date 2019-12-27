<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('reported_case_id')->nullable();
            $table->unsignedBigInteger('uploaded_by');
            $table->unsignedBigInteger('approved_visible_by')->nullable();
            
            $table->longText('info');

            // Admin User -- 1, Case User -- 0
            $table->integer('uploader_type');

            // Visible -- 1, Invisible -- 0
            $table->integer('visible_to_case_user')->nullable();

            // Approved -- 1, Unapproved -- 0, Unattended -- 2
            $table->integer('approved_visible_to_case_user')->nullable();

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
        Schema::dropIfExists('case_uploads');
    }
}
