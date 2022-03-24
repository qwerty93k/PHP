<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Validator;

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
        $input = [
            'image_title' => $request->image_title,
            'image_alt' => $request->image_alt,
            'image_url' => $request->image_url,
            'image_description' => $request->image_description,
        ];

        $rules = [
            'image_title' => 'required',
            'image_alt' => 'required',
            'image_url' => 'required',
            'image_description' => 'required',
        ];

        $validator = Validator::make($input, $rules); // 3 funckijos argumentas neprivalomas


        //tikrina ar validatorius nepraejo
        if ($validator->fails()) {

            //zinuciu masyva, kuriose surasyta viskas, kas negerai
            //atvaizduoti zinuciu masyva prie kiekvieno input laukelio
            $errors = $validator->messages()->get('*'); //pasiima visu ivykusiu klaidu sarasa
            $image_array = array(
                'errorMessage' => "validator fails",
                'errors' => $errors
            );
        } else {

            $image = new Image;
            $image->title = $request->image_title;
            $image->alt = $request->image_alt;
            $image->url = $request->image_url;
            $image->description = $request->image_description;

            $image->save();

            $image_array = array(
                'successMessage' => "Image stored succesfuly",
                'imageId' => $image->id,
                'imageTitle' => $image->title,
                'imageAlt' => $image->alt,
                'imageUrl' => $image->url,
                'imageDescription' => $image->description,
            );
        }

        $json_response = response()->json($image_array);
        return $json_response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);

        return response()->json($image);
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
        $input = [
            'image_title' => $request->image_title,
            'image_alt' => $request->image_alt,
            'image_url' => $request->image_url,
            'image_description' => $request->image_description,
        ];

        $rules = [
            'image_title' => 'required',
            'image_alt' => 'required',
            'image_url' => 'required',
            'image_description' => 'required',
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {

            $errors = $validator->messages()->get('*');
            $image_array = array(
                'errorMessage' => "validator fails",
                'errors' => $errors
            );
        } else {

            $image = Image::find($id);
            $image->title = $request->image_title;
            $image->alt = $request->image_alt;
            $image->url = $request->image_url;
            $image->description = $request->image_description;

            $image->save();

            $image_array = array(
                'successMessage' => "Image stored succesfuly",
                'imageId' => $image->id,
                'imageTitle' => $image->title,
                'imageAlt' => $image->alt,
                'imageUrl' => $image->url,
                'imageDescription' => $image->description,
            );
        }

        $json_response = response()->json($image_array);
        return $json_response;
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
