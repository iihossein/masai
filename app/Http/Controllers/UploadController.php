<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->storeAs('uploads/tmp/' . $filename);
            TemporaryFile::create([
                'filename' => $filename,
            ]);
            return $filename;
        } else {
            return 'فایل به درستی اپلود نشد';
        }


    }
}
