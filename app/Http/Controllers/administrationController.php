<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administration;
use App\Models\reclamation;

class administrationController extends Controller
{
    public function retourneLogin()
    {
        return view('loginAdministration');
    }

    public function tableau_bord(Request $request)
    {
        $administrations = administration::whereEmail($request->email)->wherePassword($request->password)->first();

        if ($administrations == null) {
            return view('loginAdministration');
        } else {
            $reclamations = reclamation::all();
            return view('tbAdministration')->with(['administrations' => $administrations, 'reclamations' => $reclamations]);
        }
    }
}
