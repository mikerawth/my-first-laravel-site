@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>

    @if ($project->tasks->count())
        <div>
            <h3>Tasks:</h3>
                @foreach ($project->tasks as $task)
                    <div>
                        <form method="POST" action="/tasks/{{ $task->id }}" class="form-inline">
                            @method("PATCH")
                            @csrf
                            <label for="completed">
                                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                            </label>
                            {{ $task->description }}
                        </form>
                    </div>
                @endforeach

        </div>
    @endif

    <form method="POST" action="/projects/{{ $project->id }}/tasks">
        @csrf
        <label for="description">New Task</label>
        <input type="text" name="description" required>
        <button type="submit">Add New Task</button>
    </form>

    @include('errors')

    <a href="/projects">Back</a>
@endsection
