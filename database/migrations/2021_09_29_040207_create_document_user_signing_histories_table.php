<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentUserSigningHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_user_signing_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('document_signing_specimen_id');
            $table->string('user');
            $table->enum('status',['Action Required','Waiting for Others','Expiring Soon','Completed']);
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
        Schema::dropIfExists('document_user_signing_histories');
    }
}
