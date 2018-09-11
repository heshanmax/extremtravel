<?php

namespace  App\Http\Controllers;


use App\Photo;
use App\Post;
use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts = Post::paginate(5);

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();



        if($file = $request->file('photo_id')){

            $photo = $request->file('photo_id');
            $name = time(). $file->getClientOriginalName();

            //$file->move('images',$name);

            Image::make($photo->getRealPath())->resize(600, 400)->save('images/'.$name,50);



            $photo = Photo::create(['path'=>$name]);

            $input['photo_id'] = $photo->id;


        }

        $user = Auth::user();
        $input['user_id'] = $user->id;

        Post::create($input);

        Session::flash('created_user', 'User has been created');

        return redirect('/admin/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $posts = Post::all();

        $randpost = Post::inRandomOrder()->first();

        return view('destination', compact('posts','randpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);

        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $input = $request->all();



        if($file = $request->file('photo_id')){

         /*   $photo = $request->file('photo_id');
            $imagename = time().'.'.$photo->getClientOriginalExtension();

            $destinationPath = public_path('/images');
            $thumb_img = Image::make($photo->getRealPath())->resize(600, 400);
            $thumb_img->save($destinationPath.'/'.$imagename,80);

            $photo = Photo::create(['path'=>$imagename]);

            $input['photo_id'] = $photo->id;*/
            $photo = $request->file('photo_id');
            $name = time(). $file->getClientOriginalName();

            //$file->move('images',$name);

            Image::make($photo->getRealPath())->resize(600, 400)->save('images/'.$name,50);



            $photo = Photo::create(['path'=>$name]);

            $input['photo_id'] = $photo->id;


        }

        $user = Auth::user();
        $input['user_id'] = $user->id;

        $post->update($input);

        return redirect('/admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/admin/post');
    }

    public function home()
    {
        $postsindex = Post::inRandomOrder()->limit(6)->get();
        //$pagination = Paginator::make($posts->toArray(), Post::count(), 10);

        //$pagination->setBaseUrl(route('posts'));
        $toursindex = Tour::inRandomOrder()->get();
        return view('index', compact('postsindex','toursindex'));
    }


    public function homeitem()
    {
        $posts = Post::all();
        //$pagination = Paginator::make($posts->toArray(), Post::count(), 10);

        //$pagination->setBaseUrl(route('posts'));

        return view('offers', compact('posts'));
    }

    public function single($id)
    {
        $post = Post::findOrFail($id);

        return view('single', compact('post'));
    }

    public function sliderupdate($id)
    {



    }
}
