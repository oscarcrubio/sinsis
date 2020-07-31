<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function proposal()
    {
        return $this->belongsTo('App\Proposal');
    }
}
