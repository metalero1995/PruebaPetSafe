<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reportes = Reporte::all();
        return view('reportes.index', compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reportes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Si el usuario está autenticado, obtenemos su ID
        if (Auth::check()) {
            $user_id = Auth::id();
        } else {
            // Si el usuario no está autenticado, creamos un ID anónimo único
            $user_id = Str::uuid();
        }
    
        // Validar los datos del formulario
        $request->validate([
            'tipo_mascota' => 'required|string|max:255',
            'tipo_reporte' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string|max:255',
            'estado' => 'required|string|in:abierto,en_proceso,cerrado',
            'prioridad' => 'required|string|in:alta,media,baja',
        ]);
    
        // Crear el reporte con los datos del formulario y el user_id obtenido
        $reporte = new Reporte([
            'tipo_mascota' => $request->tipo_mascota,
            'tipo_reporte' => $request->tipo_reporte,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'prioridad' => $request->prioridad,
            'ubicacion' => $request->ubicacion,
            'user_id' => $user_id,
        ]);
    
        // Guardar el reporte
        $reporte->save();
    
        // Redireccionar a la página de índice de reportes
        return redirect()->route('reportes.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reporte = Reporte::findOrFail($id);
        return view('reportes.edit', compact('reporte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tipo_mascota' => 'required|string|max:255',
            'tipo_reporte' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string|max:255',
            'estado' => 'required|string|in:abierto,en_proceso,cerrado',
            'prioridad' => 'required|string|in:alta,media,baja',
        ]);

        $reporte = Reporte::findOrFail($id);

        $reporte->update($request->all());

        return redirect()->route('reportes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reporte = Reporte::findOrFail($id);
        $reporte->delete();
        return redirect()->route('reportes.index');

    }
}
