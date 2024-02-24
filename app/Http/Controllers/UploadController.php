<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-'.now()->timespan();
            $file->storeAs('uploads/tmp'.$folder,$filename);
            return $folder;
        }
        return '';
    }
}
