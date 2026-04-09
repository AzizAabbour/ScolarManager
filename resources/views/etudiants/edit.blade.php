@extends('layouts.app')

@section('title', 'Modifier Étudiant')

@section('content')

<div style="max-width: 600px; margin: 0 auto;" class="animate-fade-in">
    <div class="flex-between" style="margin-bottom: 2rem;">
        <h2 style="margin-bottom: 0;">
            <i class="fas fa-user-pen" style="color: var(--accent); margin-right: 0.5rem;"></i> 
            Modifier <span style="color: var(--primary);">Étudiant</span>
        </h2>
        <a href="{{ route('etudiants.index') }}" class="nav-links" style="font-weight: 600;">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <div class="card">
        <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label><i class="fas fa-user"></i> Nom Complet</label>
                <input type="text" name="nom" value="{{ $etudiant->nom }}" placeholder="Ex: Jean Dupont" required>
            </div>

            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email</label>
                <input type="email" name="email" value="{{ $etudiant->email }}" placeholder="example@mail.com" required>
            </div>

            <div class="form-group">
                <label><i class="fas fa-users-rectangle"></i> Groupe</label>
                <select name="groupe_id" required>
                    @foreach($groupes as $g)
                    <option value="{{ $g->id }}" 
                    {{ $etudiant->groupe_id == $g->id ? 'selected' : '' }}>
                    {{ $g->nom }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1.5rem; border-radius: 12px; height: 3.5rem;">
                <i class="fas fa-check-double"></i> Mettre à jour les informations
            </button>
        </form>
    </div>
</div>

@endsection