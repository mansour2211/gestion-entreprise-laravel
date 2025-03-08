<!-- filepath: c:\Users\msr\Desktop\Projet_reseaux\resources\views\documents\create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Ajouter un Document</h2>

    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fichier" class="form-label">Fichier</label>
            <input type="file" name="fichier" id="fichier" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="employe_id" class="form-label">Employé</label>
            <select name="employe_id" id="employe_id" class="form-control" required>
                @foreach($employes as $employe)
                    <option value="{{ $employe->id }}">{{ $employe->nom }} {{ $employe->prenom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection