@extends('layouts.app')

@section('title', 'Modifier Étudiant')

@section('content')

<div style="max-width: 600px; margin: 0 auto;">
    <div class="flex-between">
        <h2><i class="fas fa-user-edit"></i> Modifier Étudiant</h2>
        <a href="{{ route('etudiants.index') }}" style="color: var(--text-muted); text-decoration: none;">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <div class="card">
        <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label><i class="fas fa-user"></i> Nom Complet</label>
                <input type="text" name="nom" value="{{ $etudiant->nom }}" required>
            </div>

            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email</label>
                <input type="email" name="email" value="{{ $etudiant->email }}" required>
            </div>

            <div class="form-group">
                <label><i class="fas fa-users"></i> Groupe</label>
                <select name="groupe_id" required>
                    @foreach($groupes as $g)
                    <option value="{{ $g->id }}" 
                    {{ $etudiant->groupe_id == $g->id ? 'selected' : '' }}>
                    {{ $g->nom }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                <i class="fas fa-check"></i> Enregistrer les modifications
            </button>
        </form>
    </div>
</div>

@endsection