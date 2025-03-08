<!-- filepath: c:\Users\msr\Desktop\Projet_reseaux\resources\views\clients\create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Ajouter un Client</h2>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" name="telephone" id="telephone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection