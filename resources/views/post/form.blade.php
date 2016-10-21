
@if (count($errors) > 0)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif


<div class="row">

    <div class="form-group col-md-12">
        {!!Form::label('text', 'Text', array('class' => 'col-md-2 control-label')) !!}
        <div class="col-md-9">
            {!!Form::textarea('text',$data->name , array('class' => 'form-control')) !!}
        </div>
    </div>


    <div class="form-group col-sm-12">
        <div class="pull-left">
            {!!Form::submit('save', array('class' => 'btn btn-primary')) !!}
        </div>
    </div>



</div>
