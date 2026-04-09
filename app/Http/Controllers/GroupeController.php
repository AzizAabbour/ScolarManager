<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    public function index()
    {
        $groupes = Groupe::all();
        return view('groupes.index', compact('groupes'));
    }

    public function create()
    {
        return view('groupes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required'
        ]);

        Groupe::create($request->all());

        return redirect()->route('groupes.index');
    }

    public function edit($id)
    {
        $groupe = Groupe::findOrFail($id);
        return view('groupes.edit', compact('groupe'));
    }

    public function update(Request $request, $id)
    {
        $groupe = Groupe::findOrFail($id);

        $request->validate([
            'nom' => 'required'
        ]);

        $groupe->update($request->all());

        return redirect()->route('groupes.index');
    }

    public function destroy($id)
    {
        $groupe = Groupe::findOrFail($id);
        $groupe->delete();

        return redirect()->route('groupes.index');
    }
}