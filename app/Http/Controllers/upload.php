<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upload extends Controller
{
    //
    public function index(){
        return view('upload');
    }

    public function imagem(Request $request)
    {

        $file = $request->file('imagem');
        $name = $file->getPathName();
        /* $mime = \Storage::mimeType($name); */
        $file = base64_encode(file_get_contents($name));
        /* $src  = 'data: '.$mime.';base64,'.$file; */
        $src  = 'data: ;base64,'.$file;
        return view('getUpload', compact('src'));

    }

}
