<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_quiz',
        'name_participant',
        'description',
    ];

    public static function select()
    {
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
