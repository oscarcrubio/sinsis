<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Project extends Model
{
    //

    static public function getProjects()
    {
        if (Auth::user()->access_level == 3) {
            $projects = Project::all();
        } else {
            $projects = Project::all();
        }
        return $projects;
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'consultants_project')
            ->withPivot('user_id');
    }
}
