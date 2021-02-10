<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;

class etudiantController extends Controller
{
    public function retourneLogin()
    {
        return view('loginEtudiant');
    }

    public function tableau_bord(Request $request)
    {
        $etudiants = etudiant::whereEmail($request->email)->wherePassword($request->password)->first();
        //$etudiant = etudiant::wherePassword($request->password)->first();

        if ($etudiants == null /*|| $etudiant == null*/) {
            return view('loginEtudiant');
        } else {
            return view('tbEtudiant')->with(['etudiants' => $etudiants]);
        }
    }
}
