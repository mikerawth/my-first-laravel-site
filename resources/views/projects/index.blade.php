@extends('layout')

@section('content')
    <h1>Projects</h1>

    <a href="/projects/create">Create Project!</a>
    @foreach ($projects as $project)
        <li><a href="/projects/{{ $project->id }}">{{$project->title}}</a></li>
    @endforeach

@endsection
