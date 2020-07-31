<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function projects()
    {
        $this->belongsTo('App\Project');
    }

    public function files()
    {
        return $this->hasMany('App\File');
    }
}
