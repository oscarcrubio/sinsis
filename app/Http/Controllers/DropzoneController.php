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
        $imageName = time() . '.' . $image->extension();
        $image->move(base_path('\public\uploads'), $imageName);
        return reponse()->json(['success' => $imageName]);
    }
}
