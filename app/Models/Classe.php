<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table = "classes";
    protected $fillable = ["nom", "prenom", "semestre", "matiere", "note", "examen"];

    public static function moyenneGC()
    {
    $classes = Classe::all();
    $total = 0;
    $count = 0;
    foreach ($classes as $class) {
        $total += $class->note + $class->examen;
        $count++;
    }
    return $total/$count;
    }
}
