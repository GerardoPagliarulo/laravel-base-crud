<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class HomeController extends Controller
{
    public function index() {
        // All data table
        //$students = Student::all();
        // Where
        //$students = Student::where('id', 2)->get();
        //$students = Student::where('id', '!=', 2)->get();
        //$students = Student::where('name', 'Marco Dubito')->get();
        $students = Student::where('id', '!=', 2)
            ->orderBy('name', 'asc')
            ->limit(2)
            ->get();
        //$students = Student::orderBy('name', 'asc')->get();
        // First: necessario l'inserimento in un array poichè non otteniamo una collezione di oggetti su cui ciclare ma un'unica entità
        //$students[] = Student::where('id', '<>', 1)->first();
        // Find: necessario l'inserimento in un array poichè non otteniamo una collezione di oggetti su cui ciclare ma un'unica entità
        //$students[] = Student::find(3);
        /*$students = Student::all();
        $student = $students->find(3);
        dd($student->name);*/
        // Find
        return view('home', compact('students'));
    }
}
