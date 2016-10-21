@extends('layout')
@section('content')


    {!! Form::open(['route' => ['store','post']]) !!}
    @include('post.form', ['data'=>$data])
    {!! Form::close()!!}

@stop
