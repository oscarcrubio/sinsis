<?php

namespace App;

use App\Project;


use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    static public function getEnterprises()
    {
        $enterprises = Enterprise::orderBy('created_at', 'desc')->take(10)->get();
        return $enterprises;
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function user()
    {
        return $this->hasOne('App\User','client_id');
    }
}
