<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question'
    ];

    public function reponses()
    {
        return $this->hasMany(Reponse::class, 'question_id');
    }
}
