@extends('layouts.app')

@section('title', 'Modifier Groupe')

@section('content')

<div style="max-width: 500px; margin: 0 auto;">
    <div class="flex-between">
        <h2><i class="fas fa-edit"></i> Modifier le Groupe</h2>
        <a href="{{ route('groupes.index') }}" style="color: var(--text-muted); text-decoration: none;">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <div class="card">
        <form action="{{ route('groupes.update', $groupe->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nom du Groupe</label>
                <input type="text" name="nom" value="{{ $groupe->nom }}" required>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                <i class="fas fa-check"></i> Mettre à jour
            </button>
        </form>
    </div>
</div>

@endsection