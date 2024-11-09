<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class UsuarioController extends Controller
{

   

    

    /**
     * Display a listing of the resource.
     */
    

     public function index()
    {
        // Mostrar solo 5 usuarios por página
        $usuarios = Usuario::paginate(5); 
        return view('vistas.list_users', compact('usuarios')); // Enviar 'usuarios' a la vista
    }

     
     
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vistas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validated= $request->validate(
            ['nombre' => 'required|string|max:10']
        );

        Usuario::create([
            'name' => $validated['nombre'],
            'email' =>  Str::random(10).'@gmail',
            'password' => Hash::make("Hola123")
        ]);

        return redirect()->route('user.index')->with('success', 'Usuario creado con éxito.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //dd($id);
        $usuario = Usuario::find($id);
        //dd($usuario);
        return view('vistas.update',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request){
        //dd($request->all());
        $usuario = Usuario::find($request->id);
        $usuario->name = $request->nombre;
        $usuario->save();
        Alert::success('Éxito', 'Los datos han sido guardados correctamente.');
        return redirect()->route('user.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //dd($id);
        $usuario= Usuario::find($id);
        $usuario->delete();
        Alert::success('Éxito', 'Los datos han sido borrados correctamente.');
        return redirect()->route('user.index');
    }

    public function FunctionTest() {}

    public function DeveloperFunction() {}

    public function list(){

        $usuarios = Usuario::paginate(4);

        #dd($usuarios);

        return view('vistas.list_users', compact('usuarios'));
    }
}