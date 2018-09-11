@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>All Posts</h2></div>

                    <div class="panel-body">


                        <table class="table table-responsive table-striped">

                            <a href="{{route('post.create')}}"   class="btn btn-lg btn-success col-md-offset-10">+ Create Post</a>

                            <thead>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Action</th>
                            </thead>

                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td style="font-size: medium; font-weight: bold;">{{$post->title}}</td>
                                    <td><img src="{{asset($post->photo->path)}}" width="100px" height="100px" class="img-circle"></td>
                                    <td>{!! str_limit($post->content, $limit = 50)!!}</td>
                                    <td><a class="btn btn-primary" href="{{route('post.edit', $post->id)}}">Edit</a>



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
            {{$posts->render()}}
        </div>
    </div>
@endsection
