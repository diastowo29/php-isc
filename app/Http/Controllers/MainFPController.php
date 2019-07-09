<?php

namespace LaravelDias\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MainFPController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function showAll (Request $request) {
		$all_main_fp = DB::table('isc_main_fp')
			->select(DB::raw('DISTINCT(isc_date), count(*) as new_count'))
			->groupBy('isc_date')
			->orderBy('isc_date', 'desc')
			->get();

        // var_dump($all_main_fp);
        return view('upload', compact('all_main_fp'));
	}

	public function deleteFp (Request $request) {
		$date = $request->get('date');
		$employee = DB::table('isc_main_fp')->where('isc_date', '=', $date)->delete();
		
		return redirect('upload-main-fp');
	}

	public function upload (Request $request) {
		$mainfp_summary = $request->main_fp_summary;
		$main_fp_array = json_decode($mainfp_summary);
		$new_main_fp = array();

		$time_start = "";
		$time_finish = "";

		for ($i = 0; $i<count($main_fp_array); $i++) {
			$obj = (Array)$main_fp_array[$i];
			if ($obj["isc_time"] != "") {
				$time = explode(" ", $obj["isc_time"]);
				$time_start = $time[0];

				if (count($time) == 2) {
					$time_finish = $time[1];
				} else if (count($time) == 3) {
					$time_finish = $time[2];
				}
			} else {
				$time_start = "";
				$time_finish = "";
			}
			$new_main_fp[] = [
				"isc_emp_number" => $obj["isc_emp_number"],
				"isc_date" => $obj["isc_date"],
				"isc_time_start" => $time_start,
				"isc_time_finish" => $time_finish,
			];
		}
		$main_fp = DB::table('isc_main_fp')->insert(
			$new_main_fp
		);

		if ($main_fp) {
			return redirect('/upload-main-fp')->with('var', 'value');
		} else {
			var_dump('tidak berhasil');
		}
	}
}
