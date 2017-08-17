@extends('layout')

@section('content')



<div class="form-group">
	
	<?= Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) ?>
	<?= Form::label('username', 'Username') ?>
	<?= Form::text('username', null, ['id' => 'username'], ['class' => 'form-control']) ?>
	<?= Form::label('email', 'Email') ?>
	<?= Form::Text('email', null, ['id' => 'email'], ['class' => 'form-control']) ?>
	<?= Form::label('gender', 'Gender') ?>
	<?= Form::select('gender', ['male', 'female'], ['class' => 'form-control']) ?>
	<button type="submit" class="btn btn-success">Save</button>
	<?= Form::close() ?>

</div>
@endsection