@extends('layouts.app')

@section('title', 'Liste des Étudiants')

@section('content')

<div class="flex-between">
    <h2><i class="fas fa-list"></i> Liste des Étudiants</h2>
    <a href="{{ route('etudiants.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Nouveau Étudiant
    </a>
</div>

<div class="card">
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Groupe</th>
                </tr>
            </thead>
            <tbody>
                @forelse($etudiants as $e)
                <tr>
                    <td style="font-weight: 500;">{{ $e->nom }}</td>
                    <td style="color: var(--text-muted);">{{ $e->email }}</td>
                    <td>
                        <span style="background: #f1f5f9; color: #475569; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.85rem; font-weight: 500; border: 1px solid #e2e8f0;">
                            {{ $e->groupe->nom }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" style="text-align: center; color: var(--text-muted); padding: 2rem;">
                        Aucun étudiant trouvé.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection