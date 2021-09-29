<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentSigningSpecimensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_signing_specimens', function (Blueprint $table) {
            $table->id();
            $table->integer('document_signing_specimen_id');
            $table->string('coordinate_set_by');
            $table->string('coordinate_pos_status');
            $table->string('specimen_file');
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
        Schema::dropIfExists('document_signing_specimens');
    }
}
