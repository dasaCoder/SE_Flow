@extends('layouts.app')

@section('content')

	<h1>Ask a Question</h1>	

	<!--<form action="askquestion/submit" method="post">
  	<div class="form-group" style="margin-top: 40px">
	    <label for="InputQuestion"><h3>Question Heading</h3></label>
	    <input class="form-control" id="InputQuestion" placeholder="Ask a Question..">
  	</div>
  	<div class="form-group">
	    <label for="QuestionTextarea"><h3>Content</h3></label>
	    <textarea class="form-control" id="QuestionTextarea" rows="5"></textarea>
  	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
  	</form>-->

  	{!! Form::open(['url' => 'askquestion/submit','style'=>'margin-top: 40px']) !!}
  	<div class="form-group" >
    	{{Form::label('questionheading', 'Question Heading')}}
    	{{Form::text('questionheading', '',['class'=>'form-control','placeholder'=>'Enter Question Heading'])}}
    </div>
    <div class="form-group">
    	{{Form::label('content', 'Content')}}
    	{{Form::textarea('content', '',['class'=>'form-control','placeholder'=>'Enter Question Content','id'=>'QuestionTextarea'])}}
    </div>
    <div class="form-group">
    	{{Form::label('tags', 'Tags')}}
    	{{Form::text('tags', '',['class'=>'form-control','placeholder'=>'Enter Question Tags'])}}
    </div>
    <div>
    	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
	{!! Form::close() !!}





  	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  	

    <script>
        CKEDITOR.replace( 'QuestionTextarea' );
    </script>
@endsection