@extends('tasks.layout')

@section('content')

<div class="container">
    <h3>Edit task - {{$task->id}}</h3>

    @include('tasks.errors')

    <div class="row">
        <div class="col-md-12">
            {{-- <form action="tasks/{1}/edit" method="POST" > --}}
           {!! Form::open(['route' => ['tasks.update',$task->id],'method' =>'PUT']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{$task->title}}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$task->description}}</textarea>
                    <br>
                    <button class="btn btn-secondary">Submit</button>
                </div>

            {{-- </form> --}}
           {!! Form::close() !!}
        </div>
    </div>
</div>
