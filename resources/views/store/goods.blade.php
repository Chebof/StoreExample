@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Goods</h2>
    @foreach ($goods as $good1)
        <div class="card mb-3" style="max-width:60rem">
            <div class="row">
                <div class="col col-md-auto">
                    <img src="" class="card-img" style="width:200px; height:200px;" >
                </div>
                <div class="card-body">
                   <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">{{ $good1 -> name }}</h5>
                            <p class="card-text">{{ $good1 -> description }}</p>
                            <p class="card-text"><small>available: {{ $good1 -> available }}</small></p>
                        </div>
                        <div class="col-4">
                            <h6>
                                {{ $good1 -> price }} $
                            </h6>
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
