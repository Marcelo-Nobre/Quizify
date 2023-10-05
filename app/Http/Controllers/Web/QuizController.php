<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show(string $id)
    {
        $quiz = Quiz::where('id', $id,)->firstOrFail();

        return view('web.quiz.show', [
            'quiz' => $quiz,
        ]);
    }

    // public function show()
    // {
    //     $quiz = Question::all();
    //     dd($quiz);
    // }
}
