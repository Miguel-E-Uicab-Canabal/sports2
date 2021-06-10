<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function index()
    {
        $torneos = Torneo::all();
        
        return view('torneo.index', compact('torneos'));
    }

    public function create()
    {
        return view('torneo.create');
    }

    public function store(Request $request)
    {
        Torneo::create($request->all());

        return redirect()->route('torneos.create');
    }

    public function show(Torneo $torneo)
    {
        return view('torneo.show', compact('torneo'));
    }   

    public function edit(Torneo $torneo)
    {
        return view('torneo.edit', compact('torneo'));
    }

    public function update(Request $request, Torneo $torneo)
    {
        $torneo->update($request->all());
        return redirect()->route('torneos.edit', $torneo);
    }

    public function destroy(Torneo $torneo)
    {
        $torneo->delete();
        return back();
    }
}
