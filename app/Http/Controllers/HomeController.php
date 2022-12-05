<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlmAlumno;
use App\Models\GrdGrado;
use App\Models\MatMaterium;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $almAlumnos = AlmAlumno::paginate();
        $grdGrados = new GrdGrado();
        $matMaterium = new MatMaterium();
        return view('home');
    }
}
