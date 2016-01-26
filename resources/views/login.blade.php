@extends('layouts.app')

@section('content')
	<div class="container">
		<span>Login page</span>
		<a href="{!!URL::to('auth/github')!!}">Login with Github</a><br/>
		<a href="{!!URL::to('auth/google')!!}">Login with Google</a><br/>
		<a href="{!!URL::to('auth/facebook')!!}">Login with Facebook</a><br/>
		<a href="{!!URL::to('auth/linkedin')!!}">Login with Linked In</a><br/>
		<a href="{!!URL::to('auth/twitter')!!}">Login with Twitter</a><br/>
	</div>
@endsection