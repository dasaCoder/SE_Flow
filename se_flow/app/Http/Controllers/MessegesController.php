<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessegesController extends Controller
{
    public function submit(Request $request)
    {
    	$this->validate($request,[
    		'heading'=>'required',
    		'content'=>'required',
    		'tags'=>'required'	
    	]);

    	return 'SUCCESS';
    }
}
