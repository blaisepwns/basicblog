@extends('layout')

@section('content')
	<div class="jumbotron">
		<h3>{{ $user->username }}</h3>
		<em>E-mail address:</em><code>{{ $user->email }}</code><br>
		<em>Gender:</em><code>{{ $user->gender }}</code>
	</div>
@endsection