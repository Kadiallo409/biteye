<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reclamation;
use App\Models\etudiant;

class reclamationController extends Controller
{
    public function saveData(Request $request)
    {
        $request->validate(['semestre' => 'required', 'matiere' => 'required', 'commentaire' => 'required']);

        $savee = new reclamation;
        $savee->semestre = $request->input('semestre');
        $savee->matiere = $request->input('matiere');
        $savee->commentaire = $request->input('commentaire');
        $savee->save();

        if ($savee == null) {
            return "rien enregistree";
        } else {
            $etudiants = new etudiant;
            return view('tbEtudiant')->with(['etudiants' => $etudiants]);
        }
    }
}
