@extends('layout')

@section('content')
    <h1>Projects</h1>

    @foreach ($projects as $project)

        <li><a href="/projects/{{ $project->id }}/edit">{{$project->title}}</a></li>
    @endforeach

@endsection
