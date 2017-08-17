@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>
                <div class="panel-body">
                    <h5>Hey {{ $user->username }}! </h5>
                    <div class="jumbotron">
                        <h6>Let's create a new Post!</h6>

                            <div class="form-group">
                                
                                <?= Form::open(['url' => 'posts/create']) ?>
                                <?= Form::label('title', 'Title') ?>
                                <?= Form::text('title', null, ['id' => 'title'], ['class' => 'form-control']) ?>
                                <?= Form::label('content', 'Content') ?>
                                <?= Form::TextArea('content', null, ['id' => 'content'], ['class' => 'form-control']) ?>
                                <button type="submit" class="btn btn-success">Save</button>
                                <?= Form::close() ?>

                            </div>
                    </div>
                    <div class="jumbotron">
                        <h6>My Posts  <span class="badge">{{$postNr}}</span> </h6>
                        @foreach($posts as $post)
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <small>{{ $post->title }}</small>
                            </div>
                            <div class="panel-body">
                               <small> {{ $post->content }}</small>
                            </div>
                            <div class="panel-footer">
                                <small>{{ $post->created_at }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
