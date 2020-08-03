<?php

namespace App\Http\Controllers;

use Image;
use App\Enterprise;
use Illuminate\Http\Request;
use App\Project;
use App\Proposal;
use App\File;

class DropzoneController extends Controller
{
    function createProposals(Request $request)
    {
        $project_id = $request->project_id;
        $projects = Project::getProjects();
        $side_enterprises = Enterprise::getEnterprises();
        return view('admin/proposal/create', compact('projects', 'side_enterprises','project_id'));
    }


    public function create(Request $request)
    {        
        $proposal = new Proposal;
        $proposal->project_id = $request->project;
        $proposal->description = $request->description;
        $proposal->save();
    }

    function upload(Request $request)
    {
        $proposal = Proposal::latest('id')->first();
        $image = $request->file('file');
        $imageName =  rand() . '.' . $image->extension();
        $image->move(base_path('\public\uploads'), $imageName);
        $imageUpload = new Image();
        $imageUpload->filename = $imageName;
        $file = new File;
        $file->proposal_id = $proposal->id;
        $file->name = $imageName;
        $file->path = 'uploads';
        $file->save();        
        return redirect()->back();
    }
}
