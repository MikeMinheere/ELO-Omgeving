<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Generate Upload View
     *
     * @return void
    */
    public  function uploadUi()
    {
        
        return view('dropzone-file-upload');
    }
    /**
     * File Upload Method
     *
     * @return void
     */
    public  function FileUpload(Request $request)
    {
        $file = $request->file('file');
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('InleverBestanden'),$fileName);
        return response()->json(['success'=>$fileName]);
    }
//
}
