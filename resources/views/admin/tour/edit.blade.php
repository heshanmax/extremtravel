@extends('layouts.app')
@section('content')
    @include('includes.tinyeditor')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Tour</div>

                    <div>
                        <a href="{{route('tour.create')}}"   class="btn btn-lg btn-success col-md-offset-10">+ Create Tour</a>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-3">
                            <img src="{{asset($tour->photo->path)}}" class="img-circle" height="200px" width="200px">
                        </div>
                        <div class="col-md-9">
                            {!! Form::model($tour,['method'=>'PATCH', 'action'=>['TourController@update',$tour->id],'files'=>true]) !!}
                            {{csrf_field()}}

                            <div class="form-group">
                                {!! Form::label('title','Tour Title: ') !!}
                                {!! Form::text('title',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('content','Tour Content: ') !!}
                                {!! Form::textarea('content',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('type','Tour Type: ') !!}
                                {!! Form::text('type',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('photo_id','Tour Image: ') !!}
                                {!! Form::file('photo_id',['class'=>'btn ']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                            <div  class="form-group">
                                {!! Form::open(['method'=>'DELETE', 'action'=>['TourController@destroy', $tour->id]]) !!}
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