<?php

namespace LaravelDias\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function doLogin(Request $request){
		$username = $request->username;
		$password = $request->password;

		// $users = DB::table('userlogin')->where('username', '=', $username)->select('password')->get();
		// echo($users[0]->password);


		// if ($username == 'admin') {
		// 	return redirect('/home')->with('var', 'value');
		// } else {
		// 	return redirect('/login')->with('var', 'value');
		// }

		return redirect('/dashboard')->with('var', 'value');
	}
}
