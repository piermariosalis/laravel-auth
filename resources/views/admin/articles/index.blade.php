@extends('layouts.dashboard')

@section('content')
<h1>All articles for Admin</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>SLUG</th>
            <th>ACTIONS</th>

        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td scope="row">{{$article->id}}</td>
            <td><{{$article->title}}</td>
            <td>{{$article->slug}}</td>
            <td>
                <a href="" class="btn btn-primary"><i class="fas fa-book-open"></i>Open</a>
                <a href="" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
                <a href="" class="btn btn-primary"><i class="fas fa-trash"></i>Trash</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection