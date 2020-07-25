<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterview extends Model
{
    public function questions()
    {
        return $this->belongsToMany('App\question', 'enterview_questions')
            ->withPivot('enterview_id', 'question_id', 'answer');
    }
}
