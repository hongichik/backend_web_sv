<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }
        $path = public_path() . '/uploads/images/store/';
        $fileName = uniqid().$file->getClientOriginalName();
        while(file_exists($path.$fileName))
        {
            $fileName = uniqid().$file->getClientOriginalName();
        }
        $file->move($path, $fileName);
    
        $fullname = $path.$fileName;
        return response()->json(compact('fullname'));
    }

    public function oke()
    {
        echo 'oke';
        return 0;
    }
}
