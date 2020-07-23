<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Enterprise;
use App\User;
use App\Enterview;

class AdminController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function dashboard(){
        switch(Auth::user()->access_level){
            case 1:
                dd('acces 1');
            break;
            case 2:
                return view('admin.index');
            break;
            case 3:
                return view('admin.index');
            break;
        }
    }

    public function indexProject(){
        $enterprises  = Enterprise::all();
        $projects = ['lomre','lorem'];
        return view('admin.projects.index',compact('projects','enterprises'));
    }

    public function createProject(){
        $managers = User::where('access_level',1)->get();
        $enterprises  = Enterprise::all();
        return view('admin.projects.create',compact('enterprises','managers'));
    }

    public function indexEnterview(){
        $enterview = ['Entrevista 1','Entrevista 2', 'Entrevista 3'];
        return view('admin/enterview/index',compact('enterview'));
    }

    public function createEnterview(){
        
        return view('admin/enterview/create');
    }

    public function indexUser(){
        $user = ['Musitobb','Mayeel', 'Jepeeta'];
        return view('admin/users/index',compact('user'));
    }

    public function createUser(){
        
        return view('admin/users/create');
    }

    public function indexDiagnostics(){
        $diagnostics = ['diagnostico 1','diagnostico 2', 'diagnostico 3'];
        return view('admin/diagnostics/index',compact('diagnostics'));
    }

    public function createDiagnostics(){
        $mytime = date('Y-m-d H:i:s');
        return view('admin/diagnostics/create',compact('mytime'));
    }

    public function indexProposals(){
        $proposals = ['propuesta 1','propuesta 2', 'propuesta 3'];
        return view('admin/proposal/index',compact('proposals'));
    }

    

}
