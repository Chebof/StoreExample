@extends('tasks.layout')

@section('content')

<div class="container">
    <h3>My tasks</h3>
    <a href="{{ route('tasks.create') }}" class="btn btn-success">Create</a>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                         <td>ID</td>
                         <td>Title</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        <td>
                            <a href="{{ route('tasks.show',$task->id) }}">
                               <button class="btn btn-light btn-sm">Open</button>
                            </a>

                            <a href="{{ route('tasks.edit',$task->id) }}">
                                        <button class="btn btn-secondary btn-sm">Edit</button>
                            </a>

                            {!! Form::open(['method' => 'DELETE',
                             'route' => ['tasks.destroy', $task->id]]) !!}
                            <button onclick="return confirm('Are you sure?')"><i class="btn btn-primary btn-sm">Delete</i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
