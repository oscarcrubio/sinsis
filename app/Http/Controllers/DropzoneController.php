<?php

namespace App\Http\Controllers;

use App\Enterprise;
use Illuminate\Http\Request;
use App\Project;

class DropzoneController extends Controller
{
    function createProposals()
    {
        $projects = Project::getProjects();
        $side_enterprises = Enterprise::getEnterprises();
        return view('admin/proposal/create', compact('projects', 'side_enterprises'));
    }


    function upload(Request $request)
    {
        $image = $request->file('file');
        $imageName =  rand() . '.' . $image->extension();
        $image->move(base_path('\public\uploads'), $imageName);

        $imageUpload = new Image();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);
    }
}
