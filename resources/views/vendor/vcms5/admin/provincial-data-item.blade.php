@extends('vcms5::base')

@section('top-white')
    <h1>Provincial Data</h1>
@stop

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    Provincial Data
                </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">

                {!! Form::model($data,array(
                    'url' => '/admin/data/item',
                    'role' => 'form',
                    'name' => 'bookform',
                    'id' => 'bookform',
                    'method' => 'post',
                    ))
                !!}


                <div class="form-group">
                    {!! Form::label('province', 'Province', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            {!! Form::select('province', $provinces,
                                    null,
                                    array('class' => 'form-control',
                                        'style' => 'max-width: 400px;')) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('year', 'Year', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            {!! Form::text('year', null, array('class' => 'required form-control',
                                                                'style' => 'max-width: 400px;',
                                                                'placeholder' => 'XXXX')) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('collected', 'Collected', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            {!! Form::text('collected', null, array('class' => 'required form-control',
                                                                'style' => 'max-width: 400px;',
                                                                'placeholder' => '')) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('recycled', 'Recycled', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            {!! Form::text('recycled', null, array('class' => 'required form-control',
                                                                'style' => 'max-width: 400px;',
                                                                'placeholder' => '')) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('energy_recovery', 'Energy Recovery', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            {!! Form::text('energy_recovery', null, array('class' => 'required form-control',
                                                                'style' => 'max-width: 400px;',
                                                                'placeholder' => '')) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('diversion_rate', 'Diversion Rate', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            {!! Form::text('diversion_rate', null, array('class' => 'required form-control',
                                                                'style' => 'max-width: 400px;',
                                                                'placeholder' => '')) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('five_year_average', 'Five Year Avg', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            {!! Form::text('five_year_average', null, array('class' => 'required form-control',
                                                                'style' => 'max-width: 400px;',
                                                                'placeholder' => '')) !!}
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <div class="controls">
                        {!! Form::submit('Save', array('class' => 'btn btn-primary submit')) !!}
                        @if ($data->id > 0)
                            <a class="btn btn-danger" href="#!" onclick='confirmDelete({!! $data->id!!})'>Delete this entry</a>
                        @endif
                        <a class="btn btn-info" href="/admin/data/provincial-data">Cancel</a>

                    </div>
                </div>

                <div>&nbsp;</div>

                {!! Form::hidden('id', $data->id )!!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop

@section('bottom-js')
    <script>
        $(document).ready(function () {
            $("#bookform").validate({
                errorClass: 'has-error',
                validClass: 'has-success',
                errorElement: 'span',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents("div[class='form-group']").addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(".has-error").removeClass(errorClass).addClass(validClass);
                }
            });
        });

        @if ($data->id > 0)
        function confirmDelete(x){
            bootbox.confirm("Are you sure you want to delete this entry?", function(result) {
                if (result==true)
                {
                    window.location.href = '/admin/data/delete?id=' + x;
                }
            });
        }
        @endif
    </script>
@stop