<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use App\Models\Torneo;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    
    public function index()
    {
        $participantes = Participante::all();

        return view('participante.index', compact('participantes'));
    }

    public function create()
    {
        $torneos = Torneo::pluck('nombre', 'id');

        return view('participante.create', compact('torneos'));
    }

    public function store(Request $request)
    {
        Participante::create($request->all());
        return redirect()->route('participantes.create');
    }

    public function show($id)
    {
        $participante = Participante::find($id);
        return view('participante.show', compact('participante'));
    }

    public function edit(Participante $participante)
    {
        
        $torneos = Torneo::pluck('nombre', 'id');
        return view('participante.edit', compact('participante', 'torneos'));
    }

    public function update(Request $request, Participante $participante)
    {
        $participante->update($request->all());
        return redirect()->route('participantes.edit', $participante);
    }

    public function destroy(Participante $participante)
    {
        $participante->delete();
        return back();
    }
}
