@extends('layout')

@section('content')
<h1>Create A New Project!</h1>

<form method="POST" action="/projects">

     {{ csrf_field() }}

    <div class="form-group">
        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" type="text" name="title" placeholder="Project Title" value="{{ old('title')}}" required>
    </div>

    <div class="form-group">
        <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" name="description" placeholder="Project Description" id="" cols="30" rows="10" required>
            {{ old('description')}}
        </textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Submit Project</button>
    </div>

    @include('errors')
</form>
@endsection
