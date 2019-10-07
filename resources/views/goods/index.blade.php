@extends('layouts.app')

@section('content')


<div class="container">
    <div class="col-4">
        <div class="row d-flex justify-content-between">
            @auth
            <h2>Goods</h2>
            <a href="{{ route('admin.goods.create')}}" class="align-self-center">
                <button class="btn btn-sm btn-success ">Add new</button>
            </a>
            @endauth
        </div>
    </div>
    @foreach ($goods as $good1)
        <div class="card mb-3" style="max-width:60rem">
            <div class="row">
                <div class="col col-md-auto">
                    <img src="" class="card-img" style="width:200px; height:200px;" >
                </div>
                <div class="card-body">
                   <div class="row">
                        <div class="col-8">
                            <a href="{{route('goods.show',$good1->id)}}"><h5 class="card-title">{{ $good1 -> name }}</h5></a>
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

                            @auth
                            <div class="col-4">
                                <div class="row">
                                    <a href="{{ route('admin.goods.edit',$good1->id) }}"><button class="btn btn-sm btn-secondary" type="button" >
                                            Edit
                                    </button></a>
                                    <form action="{{ route('admin.goods.destroy',$good1->id) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-sm btn-primary" type="submit">
                                                    Delete
                                            </button>
                                    </form>
                                </div>
                            </div>
                            @endauth
                        </div>
                   </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

    @endsection
