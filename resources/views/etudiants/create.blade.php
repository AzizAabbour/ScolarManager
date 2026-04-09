@extends('layouts.app')

@section('title', 'Ajouter Étudiant')

@section('content')

<div style="max-width: 600px; margin: 0 auto;">
    <div class="flex-between">
        <h2><i class="fas fa-user-plus"></i> Ajouter un Étudiant</h2>
        <a href="{{ route('etudiants.index') }}" style="color: var(--text-muted); text-decoration: none;">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <div class="card">
        <form action="{{ route('etudiants.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label><i class="fas fa-user"></i> Nom Complet</label>
                <input type="text" name="nom" placeholder="Ex: Jean Dupont" required>
            </div>

            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email</label>
                <input type="email" name="email" placeholder="example@mail.com" required>
            </div>

            <div class="form-group">
                <label><i class="fas fa-users"></i> Groupe</label>
                <select name="groupe_id" required>
                    <option value="">-- Sélectionner un groupe --</option>
                    @foreach($groupes as $g)
                    <option value="{{ $g->id }}">{{ $g->nom }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                <i class="fas fa-save"></i> Enregistrer
            </button>
        </form>
    </div>
</div>

@endsection