<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::get();

        return view('registros.registrosIndex',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registros.registrosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recibe datos
        //$request->all();

        //valida datos
        $request->validate([
            'nombre' => 'required|string',
            'apellido' =>['required', 'string', 'max:255'],
            'telefono' => 'required|integer',
            'correo' => 'required|email',
        ]);

        /*//guarda datos
        $registro = new Registro();
        $registro->nombre = $request->nombre;
        $registro->apellido = $request->apellido;
        $registro->direccion = $request->direccion;
        $registro->telefono = $request->telefono;
        $registro->correo = $request->correo;
        $registro->save();*/

    //para poder poner observaciones nulas y que no truene el programa
    //$request->merge(['observaciones' => $request->oberaciones ?? ' ']);
    //o para los pedidos de ropita en el sistema ya funcional y para aplicarle el iba
    //o por pieza
    /* $request->merge([
        'observaciones' => $request->observaciones ?? ' ',
        'total' => $request->cantidad * $costo * $iva
    ]); para agregar columnas, para actualizar o agregar informacion
    */

        Registro::create($request->all());
        //redireccion
        return redirect('/registros');
    }

    /**
     * Display the specified resource.

     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {

        return view('registros.registrosShow', compact('registros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        return view('registros.registrosForm', compact('registros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }

    public function reportePDF(){
        return 'pdf';
    }
}
