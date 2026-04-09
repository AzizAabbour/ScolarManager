@extends('layouts.app')

@section('title', 'Nouveau Groupe')

@section('content')

<div style="max-width: 500px; margin: 0 auto;">
    <div class="flex-between">
        <h2><i class="fas fa-plus-circle"></i> Ajouter un Groupe</h2>
        <a href="{{ route('groupes.index') }}" style="color: var(--text-muted); text-decoration: none;">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <div class="card">
        <form action="{{ route('groupes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nom du Groupe</label>
                <input type="text" name="nom" placeholder="Ex: Informatique 101" required>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                <i class="fas fa-save"></i> Créer le Groupe
            </button>
        </form>
    </div>
</div>

@endsection