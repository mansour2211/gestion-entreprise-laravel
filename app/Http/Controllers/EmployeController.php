<?php

// app/Http/Controllers/EmployeController.php
namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $employes = Employe::all();
        return view('employes.index', compact('employes'));
    }

    public function create()
    {
        return view('employes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:employes',
            'poste' => 'required'
        ]);

        Employe::create($request->all());
        return redirect()->route('employes.index')->with('success', 'Employé ajouté');
    }

    public function edit(Employe $employe)
    {
        return view('employes.edit', compact('employe'));
    }

    public function update(Request $request, Employe $employe)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'poste' => 'required'
        ]);

        $employe->update($request->all());
        return redirect()->route('employes.index')->with('success', 'Employé modifié');
    }

    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employes.index')->with('success', 'Employé supprimé');
    }
}
