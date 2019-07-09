<?php

namespace LaravelDias\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDias\Http\Requests;
use LaravelDias\Http\Controllers\Controller;

class TestController extends Controller {
   public function index(){
      echo "<br>Test Controller.";
   }
}