@extends('layout')
@section('content')


    <div class="row">
        <a style="margin:5px" href="{{route('create','emp')}}" class="btn btn-primary">add Emp</a>
    </div>

     <table class="table table-bordered table-responsive table-hover">
         <thead>
           <tr>
               <td>#</td>
               <td>Name</td>
               <td>address</td>
               <td>Mobile</td>
               <td>Action</td>
           </tr>
         </thead>
          <tbody>
               @foreach($data as $index=>$da)
                 <tr>
                     <td>{{$index+1}}</td>
                     <td>{{ $da->name }}</td>
                     <td>{{ $da->address }}</td>
                     <td>{{ $da->mobile }}</td>
                     <td>

                         <a href="{{ route('edit',['emp',$da->id]) }}" class="btn btn-primary" >Edit</a>

                         {!! Form::open(['route'=>['emps.destroy',$da->id], 'method'=>'delete']) !!}
                         {!!Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                         {!! Form::close()!!}


                     </td>

                 </tr>
               @endforeach

         </tbody>
     </table>

@stop
