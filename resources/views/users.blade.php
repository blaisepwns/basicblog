@extends('layout')

@section('content')
	<div class="container">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Username</th>
					<th>E-mail</th>
					<th>Gender</th>
					<th colspan="2" style="text-align: center;">Actions</th>
				</tr>
			</thead>
			@foreach($users as $user)
			<tr>
				<td><a href="{{ route('users.show', $user) }}">{{ $user->username }}</a></td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->gender }}</td>
				<td style="text-align: right;"><a href="{{ route('users.edit', $user) }}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a></td>	
				<?= Form::open(['route' => ['users.destroy', $user], 'method' => 'DELETE']) ?>
					<td><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span></button></td>
	            <?= Form::close() ?>
			</tr>
			@endforeach
		</table>
	</div>
@endsection