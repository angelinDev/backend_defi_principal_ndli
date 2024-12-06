<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function getQuiz() {
        $question_id_list = [];
        $question_list = [];

        for ($i = 0; $i < 8; $i++) {
            do {
                $nombreAleatoire = rand(1, 50);
            } while (in_array($nombreAleatoire, $question_id_list));

            array_push($question_id_list, $nombreAleatoire);

            $question = Question::with('reponses')->findOrFail($nombreAleatoire);
            array_push($question_list, $question);
        }

        $data = [
            'status' => 'success',
            'message' => 'Données récupérées avec succès',
            'data' => $question_list,
        ];

        return response()->json($data);
    }
}
