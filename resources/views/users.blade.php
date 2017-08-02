@extends('layout')

@section('content')
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Username</th>
				<th>E-mail</th>
				<th>Gender</th>
				<th>Actions</th>
			</tr>
		</thead>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->username }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->gender }}</td>
			<?= Form::open(['route' => ['users.destroy', $user], 'method' => 'DELETE']) ?>
				<td><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span></button></td>
            <?= Form::close() ?>
		</tr>
		@endforeach
	</table>
@endsection