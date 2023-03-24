<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public $with = ['votes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalStars()
    {
        return $this->hasMany(Vote::class)
            ->where('question_id',$this->id)
            ->where('favorite', 1);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
