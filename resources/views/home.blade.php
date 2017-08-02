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
                        <code>@Blaise megcsinalja majd a FORM-ot hozza :)</code>
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
