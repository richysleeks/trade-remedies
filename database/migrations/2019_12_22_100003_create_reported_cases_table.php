<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportedCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reported_cases', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('created_by');

            $table->longText('description');
            $table->string('title');
            $table->string('exporter_name')->nullable();
            $table->string('exporter_email')->nullable();
            $table->string('exporter_address')->nullable();
            $table->string('exporter_website')->nullable();
            $table->string('exporter_phone')->nullable();

            //1 -- Active, 2 -- Inactive ---- Add other options
            $table->integer('status')->default(1);

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
        Schema::dropIfExists('reported_cases');
    }
}
