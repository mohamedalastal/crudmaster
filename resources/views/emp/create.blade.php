@extends('layout')
@section('content')


    {!! Form::open(['route' => ['store','emp']]) !!}
    @include('emp.form', ['data'=>$data])
    {!! Form::close()!!}

@stop
