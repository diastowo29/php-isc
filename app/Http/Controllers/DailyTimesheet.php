<?php

namespace LaravelDias\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DailyTimesheet extends Controller
{
	public function submit (Request $request) {
		$new_dts = array();
		
		$ts_summary = $request->ts_summary;
		foreach (explode("|", $ts_summary) as $key => $value) {
			if ($value !== '') {
				$dtsJson = json_decode($value);

				$ts_emp_number = $dtsJson->ts_emp_number;
				$ts_status = $dtsJson->ts_status;
				$ts_job_number = $dtsJson->ts_job_number;
				$ts_date = $dtsJson->ts_date;

				$new_dts[] = [
			    	'isc_emp_number' => $ts_emp_number,
			    	'isc_job_number' => $ts_job_number,
			    	'isc_status' => $ts_status,
			    	'isc_summary' => $value,
			    	'isc_date' => $ts_date
			    ];
				
			}
		}
		$dts = DB::table('isc_daily_timesheet')->insert(
			$new_dts
		);
		if ($dts) {
			return redirect('/form')->with('var', 'value');
		} else {
			var_dump('tidak berhasil');
		}
	}
}
