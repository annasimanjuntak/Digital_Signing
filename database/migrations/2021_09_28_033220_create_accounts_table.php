<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('phone');
            $table->integer('ktp');
            $table->string('ktp_photo');
            $table->integer('npwp')->nullable();
            $table->string('npwp_photo')->nullable(); 
            $table->string('address');
            $table->string('city');
            $table->string('province'); 
            $table->enum('gender', ['Male','Female']);
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('org_unit');
            $table->string('work_unit');
            $table->string('position');
            $table->string('spesimen_file');
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
        Schema::dropIfExists('accounts');
    }
}
