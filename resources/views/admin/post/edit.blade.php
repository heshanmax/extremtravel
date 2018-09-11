@extends('layouts.app')
@section('content')
    @include('includes.tinyeditor')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Posts</div>

                    <div class="panel-body">
                        <div class="col-md-3">
                            <img src="{{asset($post->photo->path)}}" class="img-circle" height="200px" width="200px">
                        </div>
                        <div class="col-md-9">
                            {!! Form::model($post,['method'=>'PATCH', 'action'=>['PostController@update',$post->id],'files'=>true]) !!}
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
                                {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                            <div  class="form-group">
                                {!! Form::open(['method'=>'DELETE', 'action'=>['PostController@destroy', $post->id]]) !!}
                                {{csrf_field()}}

                                <div class="form-group">
                                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection