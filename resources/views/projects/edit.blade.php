@extends('layout')

@section('content')
    <h1>Edit Project</h1>

    <form action="/projects/{{ $project->id}}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Title" value="{{ $project->title}}">
        </div>


        <div>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10">{{ $project->description}}</textarea>
        </div>

        <div>
            <button type="submit">Update Project</button>
        </div>

    </form>
@endsection
