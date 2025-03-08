<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Employe;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }

    public function create()
    {
        $employes = Employe::all();
        return view('documents.create', compact('employes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'fichier' => 'required|file',
            'employe_id' => 'required|exists:employes,id'
        ]);

        $fichier = $request->file('fichier')->store('documents');

        Document::create([
            'titre' => $request->titre,
            'fichier' => $fichier,
            'employe_id' => $request->employe_id
        ]);

        return redirect()->route('documents.index')->with('success', 'Document ajouté');
    }

    public function edit(Document $document)
    {
        $employes = Employe::all();
        return view('documents.edit', compact('document', 'employes'));
    }

    public function update(Request $request, Document $document)
    {
        $request->validate([
            'titre' => 'required',
            'fichier' => 'nullable|file',
            'employe_id' => 'required|exists:employes,id'
        ]);

        if ($request->hasFile('fichier')) {
            $fichier = $request->file('fichier')->store('documents');
            $document->update([
                'titre' => $request->titre,
                'fichier' => $fichier,
                'employe_id' => $request->employe_id
            ]);
        } else {
            $document->update($request->only('titre', 'employe_id'));
        }

        return redirect()->route('documents.index')->with('success', 'Document modifié');
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('documents.index')->with('success', 'Document supprimé');
    }
}