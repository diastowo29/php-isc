<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isc_employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isc_emp_number');
            $table->string('isc_name');
            $table->string('isc_joindate');
            $table->string('isc_probation');
            $table->string('isc_birth');
            $table->string('isc_nik');
            $table->string('isc_email');
            $table->string('isc_kk');
            $table->string('isc_account');
            $table->string('isc_npwp');
            $table->string('isc_kkstatus');
            $table->string('isc_bpjs_tk');
            $table->string('isc_bpjs_ks');
            $table->string('isc_address');
            $table->string('isc_phone');
            $table->string('isc_position');
            $table->double('isc_salary');
            $table->double('isc_allowance');
            $table->double('isc_meal');
            $table->double('isc_transport');
            $table->double('isc_ontime');
            $table->double('isc_attendance');
            $table->double('isc_hse');
            $table->double('isc_productivity');
            $table->double('isc_away');
            $table->double('isc_total');
            $table->boolean('isc_active');
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
        Schema::dropIfExists('isc_employee');
    }
}
