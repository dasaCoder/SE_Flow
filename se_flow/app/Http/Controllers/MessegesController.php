<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class MessegesController extends Controller
{
    public function submit(Request $request)
    { 
    	$this->validate($request,[
    		'heading'=>'required',
    		'content'=>'required',
    		'tags'=>'required'	
    	]);

    	//create a new question
    	$question = new Question;
    	$question->heading = $request->input('heading');
    	$question->content = $request->input('content');
    	$question->tags = $request->input('tags');

    	//save question
    	$question->save();

    	//redirect
    	return redirect('/');

    }
}
