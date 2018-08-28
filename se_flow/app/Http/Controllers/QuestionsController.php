<?php

namespace App\Http\Controllers;

//use App\Http\Requests\QuestionsRequest;
use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function add_questions(Request $request)
    {
        $inputs = $request->input();
        $title = $inputs["title"];
        $ques = $inputs["question"];
        $description = $inputs["description"];
        
        $question = new Question();
        $question->question = $ques;
        $question->description = $description;
        $result = $question->save();

        dd($result);

    }

    public function edit(){

    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
