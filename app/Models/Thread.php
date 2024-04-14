<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    protected $fillable = [
        "firstname",
        "lastname",
        "email",
        "subject",
        "message",
        "name_reacted_to",
    ];

    public $timestamps = true;
}
