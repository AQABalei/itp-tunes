<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingsController extends Controller
{
    public function index(){
    	$maintenance = DB::table('configurations')->where("name", "maintenance");
    	$query = $maintenance->get();
    	return view('/settings', [
    		'mStatus' => $query[0]->value
    	]);
    }

    public function toggle(){
    	if(request('OnorOff') == 'on'){
    		$maintenance = DB::update('update configurations set value = "on" where name = "maintenance"');
    	}
    	else{
    		$maintenance = DB::update('update configurations set value = "off" where name = "maintenance"');
    	}
    	return redirect('/settings');
    }
}
