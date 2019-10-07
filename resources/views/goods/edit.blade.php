@extends('layouts.app')

@section('content')
<div class="container">

    @include('errors')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit  - {{ $good1->name }} </div>
                 <div class="card-body">
                    {{-- <form action="{{route('goods.update', $good1)}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }} --}}
                    {!! Form::open(['route' => ['admin.goods.update',$good1->id],'method' => 'PUT']) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$good1->description}}</textarea>
                            <br>
                            <input type="text" class="form-control" name="price" value="{{$good1->price}}">
                            <br>
                            <input type="text" class="form-control" name="available" value="{{$good1->available}}">
                            <br>
                            <button class="btn btn-secondary" type="submit">Submit</button>
                        </div>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
