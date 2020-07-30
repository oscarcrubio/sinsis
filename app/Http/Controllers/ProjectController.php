<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProjectController extends Controller
{
    public function setUser(Request $request)
    {
        $user_id = $request->user;
        $project_id = $request->project;
        $user = User::where('id', $user_id)->first();
        $user->projects()->attach($user_id, ['id_project' => $project_id]);
        $data = [
            'name' => $user->name,
            'email' => $user->email,
        ];
        return response()->json(array('success' => true, 'data' => $data), 200);
    }
}
