<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionsRequest;
use App\User;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function add_questions(QuestionRequest $request)
    {
        $inputs = $request->input();
        $title = $inputs["title"];
        $ques = $inputs["question"];
        $description = $inputs["description"];
        
        $question = new Question();
        $question->question = $ques;
        $question->description = $description;
        $result = $qusetion->save();

        if ($result) {
            return redirect('/home');
        } else {
            return redirect('/register');
        }
    }

    public function edit(){

    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
