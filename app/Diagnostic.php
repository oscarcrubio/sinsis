<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    public function projects()
    {
        $this->belongsTo('App\Project');
    }
}
