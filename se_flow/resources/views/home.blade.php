@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac sapien nisi. Proin ut elit id lacus ultricies viverra ut sit amet leo. Aliquam posuere ex auctor magna vulputate convallis. In hac habitasse platea dictumst. Ut quis tellus mattis, ornare nulla eu, dictum orci. Maecenas in bibendum lectus. Integer tristique molestie metus, vel ultricies magna scelerisque ac. Aliquam semper justo sed ante mattis, et elementum libero bibendum. Donec euismod porta lectus eget varius. Suspendisse mauris augue, eleifend tempor vestibulum ut, molestie et dolor. Mauris eget ullamcorper tellus. </p>	
@endsection

@section('sidebar')
	@parent
	<p>This is appended to sidebar</p>
@endsection