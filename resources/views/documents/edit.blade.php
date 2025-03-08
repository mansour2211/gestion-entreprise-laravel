<!-- filepath: c:\Users\msr\Desktop\Projet_reseaux\resources\views\documents\edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Modifier un Document</h2>

    <form action="{{ route('documents.update', $document->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" value="{{ $document->titre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fichier" class="form-label">Fichier</label>
            <input type="file" name="fichier" id="fichier" class="form-control">
        </div>
        <div class="mb-3">
            <label for="employe_id" class="form-label">Employé</label>
            <select name="employe_id" id="employe_id" class="form-control" required>
                @foreach($employes as $employe)
                    <option value="{{ $employe->id }}" {{ $document->employe_id == $employe->id ? 'selected' : '' }}>
                        {{ $employe->nom }} {{ $employe->prenom }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection