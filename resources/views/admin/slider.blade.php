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
                            {!! Form::open(['method'=>'POST', 'action'=>'PostController@sliderupdate','files'=>true]) !!}
                                {{csrf_field()}}

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