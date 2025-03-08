<!-- filepath: c:\Users\msr\Desktop\Projet_reseaux\resources\views\documents\index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>Liste des Documents</h2>
        <a href="{{ route('documents.create') }}" class="btn btn-primary">Ajouter un Document</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Fichier</th>
                <th>Employé</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documents as $document)
                <tr>
                    <td>{{ $document->titre }}</td>
                    <td><a href="{{ asset('storage/' . $document->fichier) }}" target="_blank">Télécharger</a></td>
                    <td>{{ $document->employe->nom }} {{ $document->employe->prenom }}</td>
                    <td>
                        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection