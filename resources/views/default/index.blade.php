@extends('layout')
@section('content')


    <div class="row">
        <a style="margin:5px" href="{{route('create','post')}}" class="btn btn-primary">add post</a>
    </div>

    <table class="table table-bordered table-responsive table-hover">
        <thead>
        <tr>
            <td>#</td>
            <td>text</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $index=>$da)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{ $da->text }}</td>
                <td>

                    <a href="{{ route('edit',['post',$da->id]) }}" class="btn btn-primary" >Edit</a>

                    {!! Form::open(['route'=>['destroy','post',$da->id], 'method'=>'delete']) !!}
                    {!!Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    {!! Form::close()!!}


                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

@stop
