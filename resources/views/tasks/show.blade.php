@extends('tasks.layout')

@section('content')

@include('tasks.errors')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $task->title }}</h3>
            <p>
                {{ $task->description }}
            </p>
        </div>
    </div>
</div>
