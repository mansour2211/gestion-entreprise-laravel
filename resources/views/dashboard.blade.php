<!-- filepath: c:\Users\msr\Desktop\Projet_reseaux\resources\views\dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Ajoutez le lien vers Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div class="container mt-4">
        <h2 class="text-center mb-4 text-white" style="margin-top: 50px; font-size: 2.5rem;">Plateforme de gestion et accès distant</h2>

        <div class="row justify-content-center align-items-center" style="height: calc(100vh - 250px);">
            <!-- Card pour les Employés -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-header bg-dark text-white text-center">
                        <h5><i class="fas fa-users"></i> Gérer les Employés</h5>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <p class="flex-grow-1">Ajoutez, modifiez ou supprimez des employés.</p>
                        <a href="{{ route('employes.index') }}" class="btn btn-primary btn-dashboard">Voir les Employés</a>
                    </div>
                </div>
            </div>

            <!-- Card pour les Clients -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-header bg-dark text-white text-center">
                        <h5><i class="fas fa-user-tie"></i> Gérer les Clients</h5>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <p class="flex-grow-1">Ajoutez, modifiez ou supprimez des clients.</p>
                        <a href="{{ route('clients.index') }}" class="btn btn-primary btn-dashboard">Voir les Clients</a>
                    </div>
                </div>
            </div>

            <!-- Card pour les Documents -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-header bg-dark text-white text-center">
                        <h5><i class="fas fa-file-alt"></i> Gérer les Documents</h5>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <p class="flex-grow-1">Ajoutez, modifiez ou supprimez des documents.</p>
                        <a href="{{ route('documents.index') }}" class="btn btn-primary btn-dashboard">Voir les Documents</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-image: url('/images/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: white;
        }
        .custom-card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            min-height: 250px; /* Diminuez la hauteur minimale des cartes */
            transition: transform 0.3s ease; /* Ajoutez une transition pour l'effet de déplacement */
        }
        .custom-card:hover {
            transform: translateY(-10px); /* Déplacez la carte vers le haut lorsqu'on passe le curseur dessus */
        }
        .btn-dashboard {
            width: 100%;
        }
        .card-header {
            font-size: 1.25rem;
        }
        .card-body p {
            font-size: 1rem;
        }
        .text-white {
            color: white;
        }
        /* Styles pour changer la couleur des éléments du navbar lorsqu'ils sont survolés */
        .navbar-nav .nav-link:hover {
            color: blue !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection