<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenUserSigningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_user_signings', function (Blueprint $table) {
            $table->id();
            $table->integer('document_id');
            $table->integer('user_id');
            $table->string('location');
            $table->string('note');
            $table->timestamp('sign_at');
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
        Schema::dropIfExists('dokumen_user_signings');
    }
}
