<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Storage;
use App\Events\EraRequestWasMade;

class imagesController extends Controller
{
    public function main(){ 

    return view('main'); // return main html view

    }

    public function Upload(Request $request){ 

    	if($request->hasFile('file')){ // if input have file then do code below

    		$filename = $request->file->getClientOriginalName(); // set original file name

    		$request->file->storeAs('public/upload',$filename); // store image file with original image name in specified directory

       DB::table('pics')->insert(['image' => $filename]); //insert image name in data base table
		//return 'got it :)';

       return redirect('galery');
    	}
       //  return $request->all();  // see if you get all requests
    }

    public function showImage(){

     $img = DB::table('pics')->get(); // get all data from data base

    return view('galery',compact('img')); // return html view with variable $img now you can access in balde php

    }

    // delete file from /public/upload directory
    public function deleteImage(){

        if(Storage::delete('public/upload/"yourImageFile"')){ // delete file

            return 'deleted'; // return msg

        }
    }



}
