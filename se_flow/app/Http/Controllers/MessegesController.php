<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessegesController extends Controller
{
    public function submit(Request $request)
    {
    	$this->validate($request,[
    		'questionheading'=>'required',
    		'content'=>'required',
    		'tags'=>'required'	
    	]);

    	return 'SUCCESS';
    }
}
