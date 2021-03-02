@extends('layouts.app')

@section('content')

<div class="jumbotron col-lg-12">
    <h1 class="display-12">Dashboard Articles</h1>
    
</div>
@foreach($articles as $article)
<div class="container">
    <div class="">
            <h1>{{ $article->title}}</h1>
            <p>{{ $article->body}}</p>
            <div>
        <span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span></div>         
            </div>
            <hr>
    </div>
</div>
@endforeach
@endsection
