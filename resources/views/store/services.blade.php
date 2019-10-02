@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Services</h2>
    @foreach ($services as $service)
        <div class="card mb-3" style="max-width:60rem">
            <div class="row">
                <div class="col col-md-auto">
                    <img src="" class="card-img" style="width:200px; height:200px;" >
                </div>
                <div class="card-body">
                   <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">{{ $service -> name }}</h5>
                            <p class="card-text">{{ $service -> description }}</p>
                            <p class="card-text"><small>executor: {{ $service -> executor }}</small></p>
                        </div>
                        <div class="col-4">
                            <h5>
                                {{$service -> price}} $
                            </h5>
                            <button class="btn btn-sm btn-success" type="submit">
                                Add to shoping cart
                            </button>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
