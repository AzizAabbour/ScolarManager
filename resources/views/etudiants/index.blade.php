@extends('layouts.app')

@section('title', 'Liste des Étudiants')

@section('content')

<div class="flex-between animate-fade-in" style="margin-bottom: 2rem;">
    <h2>
        <i class="fas fa-user-graduate" style="color: var(--accent); margin-right: 0.5rem;"></i> 
        Liste des <span style="color: var(--primary);">Étudiants</span>
    </h2>
    <a href="{{ route('etudiants.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Nouveau Étudiant
    </a>
</div>

<div class="card animate-fade-in" style="padding: 0; overflow: hidden;">
    <div class="table-container" style="box-shadow: none; margin-top: 0; border-radius: 0;">
        <table>
            <thead>
                <tr>
                    <th><i class="fas fa-signature"></i> Nom Complet</th>
                    <th><i class="fas fa-envelope"></i> Email</th>
                    <th><i class="fas fa-users-rectangle"></i> Groupe</th>
                </tr>
            </thead>
            <tbody>
                @forelse($etudiants as $e)
                <tr>
                    <td style="font-weight: 700; color: var(--primary);">{{ $e->nom }}</td>
                    <td style="color: var(--text-muted);">{{ $e->email }}</td>
                    <td>
                        <span class="badge badge-success">
                            {{ $e->groupe->nom }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" style="text-align: center; color: var(--text-muted); padding: 4rem;">
                        <i class="fas fa-folder-open" style="display: block; font-size: 2rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                        Aucun étudiant trouvé.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection