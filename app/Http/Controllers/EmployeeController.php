<?php

namespace LaravelDias\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function submit(Request $request){

		$id = $request->emp_id;
		$emp_number = $request->emp_number;
		$new_name = $request->new_name;
		$new_join_date = $request->new_join_date;
		$new_prob_period = $request->new_prob_period;
		$new_date_of_birth = $request->new_date_of_birth;
		$new_nik = $request->new_nik;
		$new_email = $request->new_email;
		$new_kk = $request->new_kk;
		$new_rek = $request->new_rek;
		$new_npwp = $request->new_npwp;
		$new_bpjs_tk = $request->new_bpjs_tk;
		$new_bpjs_ks = $request->new_bpjs_ks;
		$new_phone = $request->new_phone;
		$new_position = $request->new_position;
		$new_salary = $request->new_salary;
		$new_allowance = $request->new_allowance;
		$new_meal = $request->new_meal;
		$new_transport = $request->new_transport;
		$new_ontime = $request->new_ontime;
		$new_attendance = $request->new_attendance;
		$new_hse = $request->new_hse;
		$new_productivity = $request->new_productivity;
		$new_away = $request->new_away;
		$new_total = $request->new_total;
		
		// $users = DB::insert('select * from users');
		// $users = DB::insert('insert into users (username, password) values (?, ?)', ['ayuamizahnew', 'newrahasia']);
		// $users = DB::table('users')->get();
		// $users = DB::table('userlogin')->insert(
		//     ['username' => 'admin', 'password' => 'admin']
		// );
		// $employee = DB::table('isc_employee')->where('id', '=', $id)->get();

		// echo (is_null($id));
		echo $id;
		if (is_null($id)) {
			$employee = DB::table('isc_employee')->insert(
			    [
			    	'isc_name' => $new_name, 
			    	'isc_emp_number' => $emp_number,
			    	'isc_joindate' => $new_join_date,
			    	'isc_probation' => $new_prob_period,
			    	'isc_birth' => $new_date_of_birth,
			    	'isc_nik' => $new_nik,
			    	'isc_email' => $new_email,
			    	'isc_kk' => $new_kk,
			    	'isc_kkstatus' => '0',
			    	'isc_account' => $new_rek,
			    	'isc_npwp' => $new_npwp,
			    	'isc_bpjs_tk' => $new_bpjs_tk,
			    	'isc_bpjs_ks' => $new_bpjs_ks,
			    	'isc_phone' => $new_phone,
			    	'isc_position' => $new_position,
			    	'isc_address' => 'bogor',
			    	'isc_salary' => $new_salary,
			    	'isc_allowance' => $new_allowance,
			    	'isc_meal' => $new_meal,
			    	'isc_transport' => $new_transport,
			    	'isc_ontime' => $new_ontime,
			    	'isc_attendance' => $new_attendance,
			    	'isc_hse' => $new_hse,
			    	'isc_productivity' => $new_productivity,
			    	'isc_away' => $new_away,
			    	'isc_total' => 10,
			    ]
			);

			if ($employee) {
				return redirect('/new-employee')->with('var', 'value');
			} else {
				var_dump('tidak berhasil');
			}

		} else {
			$employee = DB::table('isc_employee')->where('id', $id)->update(
				[
					'isc_name' => $new_name, 
			    	'isc_emp_number' => $emp_number,
			    	'isc_joindate' => $new_join_date,
			    	'isc_probation' => $new_prob_period,
			    	'isc_birth' => $new_date_of_birth,
			    	'isc_nik' => $new_nik,
			    	'isc_email' => $new_email,
			    	'isc_kk' => $new_kk,
			    	'isc_kkstatus' => '0',
			    	'isc_account' => $new_rek,
			    	'isc_npwp' => $new_npwp,
			    	'isc_bpjs_tk' => $new_bpjs_tk,
			    	'isc_bpjs_ks' => $new_bpjs_ks,
			    	'isc_phone' => $new_phone,
			    	'isc_position' => $new_position,
			    	'isc_address' => 'bogor',
			    	'isc_salary' => $new_salary,
			    	'isc_allowance' => $new_allowance,
			    	'isc_meal' => $new_meal,
			    	'isc_transport' => $new_transport,
			    	'isc_ontime' => $new_ontime,
			    	'isc_attendance' => $new_attendance,
			    	'isc_hse' => $new_hse,
			    	'isc_productivity' => $new_productivity,
			    	'isc_away' => $new_away,
			    	// 'isc_total' => 10,
				]
			);

			if ($employee) {
				return redirect('/all-employee')->with('var', 'value');
			} else {
				var_dump($employee);
			}
		}
	}

	function showAll (Request $request) {
		$employee = DB::table('isc_employee')->get();
		// echo $employee;
		// return view('all-employee', ['employee' => $employee]);
		return view('all-employee', compact('employee'));
	}

	function edit (Request $request) {
		$id = $request->id;
		$employee = DB::table('isc_employee')->where('isc_emp_number', '=', $id)->get();
		// echo $employee;
		return view('edit_employee', compact('employee'));

	}
}
