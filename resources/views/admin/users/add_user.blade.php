@extends('layouts.admin')
@section('title','Add user')
@section('content')
	<h1>add user</h1>
	<form action="{{Route('add_user')}}" method="POST">
		@csrf
		<p>Name:<input type="text" name="name"></p>
		<p>Email:<input type="text" name="email"></p>
		<p>Password:<input type="password" name="password"></p>
		<p><input type="submit" name="add" value="Add user"></p>
	</form>
@endsection