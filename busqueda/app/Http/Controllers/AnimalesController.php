<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;

class AnimalesController extends Controller
{
 
    public function index(Request $request)
    {
        $busqueda = $request -> busqueda;
        $animales = animal:: where('especie','LIKE','%'.$busqueda.'%')
            ->orwhere ('especie','LIKE','%'.$busqueda.'%')
            ->latest('id')
            ->paginate(2);
        $data = [
            'animales'=>$animales,
            'busqueda' =>$busqueda,
        ];
        return view('animales.index', $data);
    }


    public function create()
    {
        return view('animales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $animal = new animal();
        $animal->especie= $request->especie;
        $animal->nombre= $request->nombre;
        $animal->save();
        return redirect()->route('animales.index');
      
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
    public function edit($id)
    {
        $animal = animal::find ($id);
        $data = [
            'animal'=>$animal,
        
        ];
        return view('animales.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $animal = animal::find($id);
        $animal->especie= $request->especie;
        $animal->nombre= $request->nombre;
        $animal->save();
        return redirect()->route('animales.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $id;
    }
}
