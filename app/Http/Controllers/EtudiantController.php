<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Groupe;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::with('groupe')->get();
        return view('etudiants.index', compact('etudiants'));
    }

    public function create()
    {
        $groupes = Groupe::all();
        return view('etudiants.create', compact('groupes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:etudiants',
            'groupe_id' => 'required'
        ]);

        Etudiant::create($request->all());

        return redirect()->route('etudiants.index');
    }

    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $groupes = Groupe::all();

        return view('etudiants.edit', compact('etudiant', 'groupes'));
    }

    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);

        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:etudiants,email,' . $id,
            'groupe_id' => 'required'
        ]);

        $etudiant->update($request->all());

        return redirect()->route('etudiants.index');
    }

    public function destroy($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        return redirect()->route('etudiants.index');
    }
}