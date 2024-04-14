<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable =[
        "reaction_id",
        'thread_id',
         "firstname",
            "lastname",
            "email" ,
            "subject",
            "message",
            "name_reacted_to",
    ];


    public function thread()
    {
        return $this->belongsTo(Thread::class,'thread_id');
    }

    public function parentReaction()
    {
        return $this->belongsTo(Reaction::class, 'reaction_id');
    }


    public function childReactions()
    {
        return $this->hasMany(Reaction::class, 'reaction_id');
    }
}
