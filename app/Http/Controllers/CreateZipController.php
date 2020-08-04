<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Proposal;
use App\Project;
use ZipArchive;

class CreateZipController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('download')) {            
            // Define Dir Folder
            $public_dir=public_path();
            // Zip File Name            
            $project = Project::select('name')->where('id',$request->project_id)->first();            
            $zipFileName = 'Files '.$project->name.'.zip';
            // Create ZipArchive Obj
            $zip = new ZipArchive;
            if ($zip->open($public_dir . '/' . $zipFileName, ZipArchive::CREATE) === TRUE) {                
                // Add File in ZipArchive
                if(isset($request->proposal_id)){
                    $proposal = Proposal::where('id',$request->proposal_id)->first();
                }else{
                    $proposal = Proposal::where('project_id',$request->project_id)->latest('id')->first();
                }
                foreach($proposal->files as $file){
                    $zip->addFile('uploads/'.$file->name);  
                }                                   
                // Close ZipArchive                
                $zip->close();
            }
            // Set Header
            $headers = array(
                'Content-Type' => 'application/octet-stream',
            );
            $filetopath=$public_dir.'/'.$zipFileName;
            // Create Download Response
            if(file_exists($filetopath)){
                return response()->download($filetopath,$zipFileName,$headers);
            }
        }
        return view('createZip');
    }
}