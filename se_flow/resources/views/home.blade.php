@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac sapien nisi. Proin ut elit id lacus ultricies viverra ut sit amet leo. Aliquam posuere ex auctor magna vulputate convallis. In hac habitasse platea dictumst. Ut quis tellus mattis, ornare nulla eu, dictum orci. Maecenas in bibendum lectus. Integer tristique molestie metus, vel ultricies magna scelerisque ac. Aliquam semper justo sed ante mattis, et elementum libero bibendum. Donec euismod porta lectus eget varius. Suspendisse mauris augue, eleifend tempor vestibulum ut, molestie et dolor. Mauris eget ullamcorper tellus. </p>	

@if(count($questions)>0)
	@foreach($questions as $question)
	<div>
		<ul class="list-group">
			<a href="#"><li class="list-group-item list-group-item-success">Question: <h3>{{$question->heading}}</h3></li></a>
			<li class="list-group-item">Description: {{$question->content}}</li>
			<li class="list-group-item">Tags: <b> {{$question->tags}}</b></li>
		</ul>
		<br>
		<br>
	</div>

	@endforeach
@endif

@endsection




@section('sidebar')
	@parent
	<p>This is appended to sidebar</p>
@endsection