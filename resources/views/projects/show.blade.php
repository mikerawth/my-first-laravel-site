@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    <div class="d-flex flex-column">
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
        <a href="/projects">Back</a>
    </div>
@endsection
