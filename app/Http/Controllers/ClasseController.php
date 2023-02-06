<?php

namespace App\Http\Controllers;

use App\Class;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index(){
        $c = Classe::all();
        return view('Classe.classe', [ClasseController::class, 'c'=>$c]);
    }

    public function add(){
        return view('Classe.add');
    }

    public function store(Request $request){
        $input = $request->all();
        Classe::create($input);
        return redirect('Classe/classe');
    }

    

    public function showMoyenne()
    {
        $moy = Classe::moyenneGC();
        return view('Classe/detail', compact('moy'));
    }

    public function showStudent()
    {
        $etudiant = Classe::all();
        $topStudent = null;
        $maxAverage = 0;
        foreach ($etudiant as $etudiant) {
            $average = ($etudiant->note + $etudiant->examen) / 2;
            if ($average > $maxAverage) {
                $maxAverage = $average;
                $topStudent = $etudiant;
            }
        }
        return view('Classe.premier', compact('topStudent'));
    }

}
