<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    public function enterviews()
    {
        return $this->belongsToMany('App\enterview', 'enterview_questions')
            ->withPivot('enterview_id', 'question_id', 'answer');
    }
}
