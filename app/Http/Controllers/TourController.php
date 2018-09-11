<?php

namespace App\Http\Controllers;

use App\Photo;

use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tours = Tour::paginate(5);

        return view('admin.tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tour.create');
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

        Tour::create($input);

        //Session::flash('created_tour', 'Tour has been created');

        return redirect('/admin/tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
        $tours = Tour::all();

        $randtour = Tour::inRandomOrder()->first();

        return view('tours', compact('tours','randtour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tour = Tour::findOrFail($id);

        return view('admin.tour.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tour = Tour::find($id);
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

        $tour->update($input);

        return redirect('/admin/tour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //
        $tour = Tour::findOrFail($id);
        $tour->delete();
        return redirect('/admin/tour');
    }

    public function single($id)
    {
        $post = Tour::findOrFail($id);

        return view('single', compact('post'));
    }
}
