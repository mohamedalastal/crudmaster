@extends('layout')
@section('content')


 {!! Form::open(['route'=>['emp.update',$data->id], 'method'=>'PUT']) !!}
            @include('emp.form', ['data'=>$data])
 {!! Form::close()!!}

@stop