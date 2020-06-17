<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class HomeController extends Controller
{
    public function index() {
        // ALL DATA TABLE
        $students = Student::all();
        // WHERE
        //$students = Student::where('id', 2)->get();
        //$students = Student::where('id', '!=', 2)->get();
        //$students = Student::where('name', 'Marco Dubito')->get();
        /*$students = Student::where('id', '!=', 2)
            ->orderBy('name', 'asc')
            ->limit(2)
            ->get();*/
        //$students = Student::orderBy('name', 'asc')->get();
        // FIRST: necessario l'inserimento in un array poichè non otteniamo una collezione di oggetti su cui ciclare ma un'unica entità
        //$students[] = Student::where('id', '<>', 1)->first();
        // FIND: necessario l'inserimento in un array poichè non otteniamo una collezione di oggetti su cui ciclare ma un'unica entità
        //$students[] = Student::find(3);
        /*$students = Student::all();
        $student = $students->find(3);
        dd($student->name);*/
        return view('home', compact('students'));
    }
}
