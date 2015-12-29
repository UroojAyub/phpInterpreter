<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use DB;
use Auth;
use View;
use Carbon;
 class PrevCodesController extends Controller 
{
	function main()
	{
		
	}

	function displayCodes(){
	
	
		
		$id=Auth::user()->id;
			if($id==1){
			$data= DB::table('all_codes')->join('users', 'users.id', '=', 'all_codes.userid')->get();
			}
			else{
				$data = DB::table('all_codes')->join('users', 'users.id', '=', 'all_codes.userid')->where('userid', $id)->get();
			}
		return View::make('prevcodes')->with('data', $data);
		
	
	}
}
