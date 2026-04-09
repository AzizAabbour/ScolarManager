@extends('layouts.app')

@section('title', 'Modifier Groupe')

@section('content')

<div style="max-width: 500px; margin: 0 auto;" class="animate-fade-in">
    <div class="flex-between" style="margin-bottom: 2rem;">
        <h2 style="margin-bottom: 0;">
            <i class="fas fa-layer-group" style="color: var(--accent); margin-right: 0.5rem;"></i> 
            Modifier <span style="color: var(--primary);">Groupe</span>
        </h2>
        <a href="{{ route('groupes.index') }}" class="nav-links" style="font-weight: 600;">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <div class="card">
        <form action="{{ route('groupes.update', $groupe->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label><i class="fas fa-signature"></i> Nom du Groupe</label>
                <input type="text" name="nom" value="{{ $groupe->nom }}" placeholder="Ex: DEVOWFS201" required>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1.5rem; border-radius: 12px; height: 3.5rem;">
                <i class="fas fa-check-double"></i> Mettre à jour le groupe
            </button>
        </form>
    </div>
</div>

@endsection