<?php

namespace App\Http\Controllers;
use App\Models\Reporte;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        $reportes = Reporte::all(); // Recuperar todos los reportes
        return view('publicaciones.index', compact('reportes'));
    }
}
