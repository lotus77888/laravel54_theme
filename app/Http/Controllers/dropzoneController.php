<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

class dropzoneController extends Controller
{
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {
//        return view('dropzone');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
//        echo "hello";
//        exit;
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);
    }
}
