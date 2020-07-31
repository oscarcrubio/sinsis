<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Enterview;
use App\Diagnostic;
use App\Proposal;

class Project extends Model
{
    //

    static public function getProjects()
    {
        if (Auth::user()->access_level == 3) {
            $projects = Project::orderBy('created_at', 'desc')->take(10)->get();
        } else {
            $projects = Project::orderBy('created_at', 'desc')->take(10)->get();
        }
        return $projects;
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'consultants_project')
            ->withPivot('user_id');
    }

    public function enterviews()
    {
        return $this->hasMany('App\Enterview');
    }

    public function proposals()
    {
        return $this->hasMany('App\Proposal');
    }

    public function diagnostic()
    {
        return $this->hasOne('App\Diagnostic');
    }
}
