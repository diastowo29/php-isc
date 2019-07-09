<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainFp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isc_mainfp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isc_emp_number');
            $table->string('isc_tanggal');
            $table->string('isc_waktu_mulai');
            $table->string('isc_waktu_finish');
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
        Schema::dropIfExists('isc_mainfp');
    }
}
