@extends('layout')

@section('content')
    <h1>Projects</h1>

    <a href="/projects/create">Create Project!</a>

    <ul class="list-group">
        @foreach ($projects as $project)
            <li class="list-group-item list-group-item-action"><a href="/projects/{{ $project->id }}">{{$project->title}}</a></li>
        @endforeach
    </ul>
@endsection
