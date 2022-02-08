@extends('master')
@section('title','service')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach($product as $i){
                <l1>{{$i}}</l1>
            }
            @endforeach
        </div>
    </div>
</div>


@endsection