@extends('master')
@section('title','ourteam')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach($team as $i){
                <l1>{{$i}}</l1>
            }
            @endforeach
        </div>
    </div>
</div>


@endsection