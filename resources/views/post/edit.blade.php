@extends('layout')
@section('content')


 {!! Form::open(['route'=>['update','post',$data->id], 'method'=>'PUT']) !!}
            @include('post.form', ['data'=>$data])
 {!! Form::close()!!}

@stop