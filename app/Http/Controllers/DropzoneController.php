<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    function createProposals(){
        return view('admin/proposal/create');
    }


    function upload(Request $request){
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(base_path('\public\uploads'), $imageName);
        return reponse()->json(['success' => $imageName]);
    }

}
