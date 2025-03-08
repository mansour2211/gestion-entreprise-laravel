@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>Liste des Employés</h2>
        <a href="{{ route('employes.create') }}" class="btn btn-primary">Ajouter un Employé</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Poste</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employes as $employe)
                <tr>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->email }}</td>
                    <td>{{ $employe->poste }}</td>
                    <td>
                        <a href="{{ route('employes.edit', $employe->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('employes.destroy', $employe->id) }}" method="POST" style="display:inline;">
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
