<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_holders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('reported_case_id');
            $table->unsignedBigInteger('admin_user_id');
            $table->unsignedBigInteger('assigned_by');
            $table->unsignedBigInteger('unassigned_by')->nullable();

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
        Schema::dropIfExists('case_holders');
    }
}
