@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>All Tours</h2></div>

                    <div class="panel-body">


                        <table class="table table-responsive table-striped">

                            <a href="{{route('tour.create')}}"   class="btn btn-lg btn-success col-md-offset-10">+ Create Tour</a>

                            <thead>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Type</th>
                            <th>Action</th>
                            </thead>

                            <tbody>
                            @foreach($tours as $tour)
                                <tr>
                                    <td style="font-size: medium; font-weight: bold;">{{$tour->title}}</td>
                                    <td><img src="{{asset($tour->photo->path)}}" width="100px" height="100px" class="img-circle"></td>
                                    <td>{!! str_limit($tour->content, $limit = 50)!!}</td>
                                    <td style="font-size: medium; font-weight: bold;">{{$tour->yupr}}</td>
                                    <td><a class="btn btn-primary" href="{{route('tour.edit', $tour->id)}}">Edit</a>



                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-5">
            {{$tours->render()}}
        </div>
    </div>
@endsection
