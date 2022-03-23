<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $csrf = $request->csrf; // apsaugos token

        if (isset($csrf) && !empty($csrf) && $csrf == "test") {
            $images = Image::paginate(15);
            return response()->json($images);
        }
        $images = Image::paginate(15);

        return response()->json(array(
            'error' => 'Authentification failed'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image;

        $image->title = $request->image_title;
        $image->alt = $request->image_alt;
        $image->url = $request->image_url;
        $image->description = $request->image_description;

        $image->save();

        return response()->json(array(
            'success' => 'Image submitted',
            'title' => $image->title,
            'alt' => $image->alt,
            'url' => $image->url,
            'description' => $image->description
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }
}
