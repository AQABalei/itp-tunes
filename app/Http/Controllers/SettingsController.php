<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingsController extends Controller
{
    public function index(){
    	return view('/settings');
    }

    public function toggle(){
    	echo request('OnorOff');
    	//$maintenance = DB::table('configurations')->where('name', '=', 'maintenance')->get();
    	if(request('OnorOff') == 'on'){
    		$maintenance = DB::update('update configurations set value = "on" where name = "maintenance"');
    	}
    	else{
    		$maintenance = DB::update('update configurations set value = "off" where name = "maintenance"');
    	}
    	//dd($maintenance);
    	return redirect('/settings');
    }
}
