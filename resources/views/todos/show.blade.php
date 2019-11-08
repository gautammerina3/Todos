@extends('layouts.app')

@section('title')
    Single todo: {{$todo->name}}
@endsection

@section('content')
<body>
    
    <div class="container">
    
        <h1 class="text-center my-5">
            {{$todo->name}}
        </h1>

        <div class="card card-default">
            <div class="card-header">
                Details
            </div>

            <div class="card-body">
                {{ $todo->description }}
            </div>

        </div>

        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-8">Edit</a>
        <a href="/todos/{{ $todo->id }}/delete-todos" class="btn btn-danger btn-sm my-8">Delete</a>

    </div>

</body> 
@endsection