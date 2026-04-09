@extends('layouts.app')

@section('title', 'Liste des Groupes')

@section('content')

<div class="flex-between">
    <h2><i class="fas fa-users"></i> Liste des Groupes</h2>
    <a href="{{ route('groupes.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Nouveau Groupe
    </a>
</div>

<div class="card">
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nom du Groupe</th>
                    <th style="width: 200px; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($groupes as $g)
                <tr>
                    <td style="font-weight: 600;">{{ $g->nom }}</td>
                    <td style="display: flex; gap: 0.5rem; justify-content: center;">
                        <a href="{{ route('groupes.edit', $g->id) }}" class="btn btn-sm" style="background: rgba(255, 255, 255, 0.05); color: var(--text-main);">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('groupes.destroy', $g->id) }}" method="POST" onsubmit="return confirm('Supprimer ce groupe ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" style="text-align: center; color: var(--text-muted); padding: 2rem;">
                        Aucun groupe trouvé.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection