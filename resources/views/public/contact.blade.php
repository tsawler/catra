@extends('public.base-inside')


@section('content')
    <div class="divide40"></div>
    <div class="col-md-2"></div>
    <div class=col-md-8">
    <h3 class="red">Contact CATRA</h3>
    {!! Form::open(array(
        'url' => '/contact',
        'role' => 'form',
        'name' => 'bookform',
        'id' => 'bookform',
        'method' => 'post',
        'class' => 'form-horizontal'
        ))
        !!}
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" placeholder="Name">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="you@example.com">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <textarea name="message" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Send Message</button>
            </div>
        </div>

    {!! Form::close() !!}
    </div>
@stop