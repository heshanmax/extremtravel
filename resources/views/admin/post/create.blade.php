@extends('layouts.app')
@section('content')
    @include('includes.tinyeditor')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Posts</div>

                    <div class="panel-body">

                        <div class="col-md-10">
                            {!! Form::open(['method'=>'POST', 'action'=>'PostController@store','files'=>true]) !!}
                            {{csrf_field()}}

                            <div class="form-group">
                                {!! Form::label('title','Post Title: ') !!}
                                {!! Form::text('title',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('content','Post Content: ') !!}
                                {!! Form::textarea('content',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('photo_id','Post Image: ') !!}
                                {!! Form::file('photo_id',['class'=>'btn ']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection