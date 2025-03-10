<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lista-mensajes', [
            'mensajes' => Mensaje::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mensaje = new Mensaje();
        $mensaje->nombre = $request->nombre;
        $mensaje->correo = $request->correo;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->save();

        return redirect('/mensajes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mensaje $mensaje)
    {
        return view('mensajes.show-mensaje', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensaje $mensaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mensaje $mensaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensaje $mensaje)
    {
        //
    }
}
