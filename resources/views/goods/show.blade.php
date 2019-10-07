@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $good1->name }}</h3>
            <p>
                {{ $good1->description }}
            </p>
            <p>
                {{ $good1->price }} $
            </p>
        </div>
    </div>
</div>

@endsection
