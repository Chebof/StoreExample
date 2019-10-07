@extends('layouts.app')

@section('content')

<div class="container">

    @include('errors')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-body">
                    {{-- <form action="{{route('goods.update', $good1)}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }} --}}
                    {!! Form::open(['route' => ['admin.goods.store']]) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <p>Name</p>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            <br>
                            <p>Descriprion</p>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                            <br>
                            <p>Price</p>
                            <input type="text" class="form-control" name="price" value="{{old('price')}}">
                            <br>
                            <p>Available</p>
                            <input type="text" class="form-control" name="available" value="{{old('available')}}">
                            <br>
                            <button class="btn btn-secondary">Submit</button>
                        </div>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
