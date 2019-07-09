<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DailyTimesheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isc_daily_timesheet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isc_date');
            $table->string('isc_job_number');
            $table->string('isc_emp_number');
            $table->string('isc_status');
            $table->text('isc_summary');
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
        Schema::dropIfExists('isc_daily_timesheet');
    }
}
