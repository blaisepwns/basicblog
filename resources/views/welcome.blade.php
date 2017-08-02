@extends('layout')

@section('content')
    <div class="jumbotron">
        <h3>This is a nice Blog.</h3>
        <p>Here are some nice posts written by our amazing users!</p>
    </div>
    <div class="panel-group">
        @foreach($posts as $post)
        <div class="panel panel-info">
            <div class="panel-heading">
                <strong><?= $post->title ?></strong> <br>
                <small>by <b><i> <?= $post->user->username ?> </i></b></small>
            </div>
            <div class="panel-body">
                <?= $post->content ?>
            </div>
            <div class="panel-footer">
                <?= $post->created_at ?>
            </div>
        </div>
        @endforeach
    </div>
@endsection
