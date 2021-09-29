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
            $table->integer('nik', 16);
            $table->string('ktp_photo');
            $table->string('name')->unique();
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->enum('gender', ['Male','Female']);
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('npwp');
            $table->string('npwp_photo');
            $table->string('org_unit');
            $table->string('work_unit');
            $table->string('position');
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
