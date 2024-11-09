<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    // Muestra la lista de todas las herramientas
    public function index()
    {
        $a = "LLegas a la funcion";
        Log::emergency($a);
        Log::alert($a);
        Log::critical($a);
        Log::error($a);                 
        Log::warning($a);
        Log::notice($a);
        Log::info($a);
        Log::debug($a);
        $herramientas = Herramienta::all();
        return view('herramientas.index', compact('herramientas')); // Pasa la variable a la vista
    }

    // Muestra el formulario de creación de una nueva herramienta
    public function create()
    {
        return view('herramientas.create');
    }

    // Guarda una nueva herramienta en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'cantidad' => 'required|integer|min:0',
            'disponible' => 'boolean',
        ]);
    
        Herramienta::create($request->all());
    
        // Redirige a la vista index con un mensaje de éxito
        return redirect()->route('herramientas.index')->with('success', 'Herramienta guardada exitosamente');
    }
    

    // Muestra los detalles de una herramienta específica
    public function show(Herramienta $herramienta)
    {
        return view('herramientas.show', compact('herramienta'));
    }

    // Muestra el formulario de edición de una herramienta específica
    public function edit(Herramienta $herramienta)
    {
        return view('herramientas.edit', compact('herramienta'));
    }

    // Actualiza la información de una herramienta específica en la base de datos
    public function update(Request $request, Herramienta $herramienta)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'cantidad' => 'required|integer|min:0',
            'disponible' => 'boolean',
        ]);

        $herramienta->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'cantidad' => $request->cantidad,
            'disponible' => $request->has('disponible'),
        ]);

        return redirect()->route('herramientas.index')->with('success', 'Herramienta actualizada exitosamente');
    }

    // Elimina una herramienta específica de la base de datos
    public function destroy(Herramienta $herramienta)
    {
        $herramienta->delete();
        return redirect()->route('herramientas.index')->with('success', 'Herramienta eliminada exitosamente');
    }
}