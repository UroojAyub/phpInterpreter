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
 class InterpretController extends Controller 
{
	function main()
	{
		
	}

	function interpret(){

		
		$code=Input::get('code');
		$myfile = fopen("mycode.blade.php", "w") or die("Unable to open file!");
		fwrite($myfile, $code);
		fclose($myfile);
		
		$current_user=Auth::user()->id;
		$mytime = Carbon\Carbon::now();
		
		DB::table('all_codes')->insert([['userid' => $current_user, 'code' => $code,'created_at'=>$mytime,'updated_at'=>'NULL']]);
		
        return redirect('/')->withInput();
	}
}
