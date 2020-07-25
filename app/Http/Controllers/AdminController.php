<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\UserPassword;
use App\Project;
use App\Enterprise;
use App\User;
use App\Enterview;
use App\Question;


class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function dashboard()
    {
        switch (Auth::user()->access_level) {
            case 1:
                dd('acces 1');
                break;
            case 2:
                $projects = Project::getProjects();
                return view('admin.index', compact('projects'));
                break;
            case 3:
                $projects = Project::getProjects();
                return view('admin.index', compact('projects'));
                break;
        }
    }

    public function indexProject()
    {
        $enterprises  = Enterprise::all();
        $projects = Project::getProjects();
        return view('admin.projects.index', compact('projects', 'enterprises'));
    }

    public function createProject(Request $request)
    {
        switch ($request->project_name != null) {
            case true:
                $project = new Project;
                $project->name = $request->project_name;
                $project->description = $request->project_description;
                $project->status = 1;
                $project->slug = Str::slug($request->project_name);
                $project->id_enterprise = $request->project_enterprise;
                $project->save();
                $user = User::where('id', Auth::user()->id)->first();
                $user->projects()->attach(Auth::user()->id, ['project_id' => $project->id]);
                return redirect()->route('set-project-view', $project->slug);
            case false:
                $projects = Project::getProjects();
                $managers = User::where('access_level', 1)->get();
                $enterprises  = Enterprise::all();
                return view('admin.projects.create', compact('enterprises', 'managers', 'projects'));
        }
    }

    public function setProject(Request $request)
    {
        $projects = Project::getProjects();
        $project = Project::where('slug', $request->project_name)->first();
        $enterprise = Enterprise::where('id', $project->id_enterprise)->first();
        $users_id = [];
        foreach ($project->users as $user) {
            array_push($users_id, $user->id);
        }
        $users = User::whereNotIn('id', $users_id)
            ->where('access_level', '>=', 2)->get();
        return view('admin.projects.project', compact('project', 'projects', 'users', 'enterprise'));
    }

    public function indexEnterview()
    {
        $enterview = ['Entrevista 1', 'Entrevista 2', 'Entrevista 3'];
        return view('admin/enterview/index', compact('enterview'));
    }

    public function createEnterview(Request $request)
    {
        $projects = Project::getProjects();
        $questions = Question::where('status', 1)->get();
        return view('admin.enterview.create', compact('questions', 'projects'));
    }

    public function indexUser()
    {
        $users = ['Musitobb', 'Mayeel', 'Jepeeta'];
        return view('admin/users/index', compact('users'));
    }

    public function createUser(Request $request)
    {
        switch ($request->name != null) {
            case true:
                $pass = Str::random(12);
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($pass);
                $user->access_level = 1;
                $user->charge = $request->charge;
                $user->save();
                $data = [
                    'name' => $user->name,
                    'id' => $user->id,
                    'email' => $user->email,
                ];
                $message = [
                    'name' => $request->name,
                    'pass' => $pass
                ];
                //Mail::to($request->email)->queue(new UserPassword($message));
                return response()->json(array('success' => true, 'data' => $data), 200);
                break;
                // dd($user->password);
            case false:
                return view('admin/users/create');
                break;
        }
    }

    public function indexDiagnostics()
    {
        $diagnostics = ['diagnostico 1', 'diagnostico 2', 'diagnostico 3'];
        return view('admin/diagnostics/index', compact('diagnostics'));
    }

    public function createDiagnostics()
    {
        $mytime = date('Y-m-d H:i:s');
        return view('admin/diagnostics/create', compact('mytime'));
    }

    public function indexProposals()
    {
        $proposals = ['propuesta 1', 'propuesta 2', 'propuesta 3'];
        return view('admin/proposal/index', compact('proposals'));
    }

    public function indexEnterprise()
    {
        return view('enterprises.index');
    }

    public function createEnterprise(Request $request)
    {
        switch ($request->name != null) {
            case true:
                $enterprise = new Enterprise;
                $enterprise->name = $request->name;
                $enterprise->business_name = $request->business_name;
                $enterprise->location = $request->location;
                $enterprise->id_client = $request->manager;
                $enterprise->save();
                $data = [
                    'name' => $enterprise->name,
                    'id' => $enterprise->id,
                ];
                return response()->json(array('success' => true, 'data' => $data), 200);
                break;
            case false:
                return view('admin.enterprises.create');
                break;
        }
    }
}
