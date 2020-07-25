<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class DropzoneController extends Controller
{
    function createProposals()
    {
        $projects = Project::getProjects();
        return view('admin/proposal/create', compact('projects'));
    }


    function upload(Request $request)
    {
        $image = $request->file('file');
        $imageName =  rand() . '.' . $image->extension();
        $image->move(base_path('\public\uploads'), $imageName);

        $imageUpload = new Image();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }
}
