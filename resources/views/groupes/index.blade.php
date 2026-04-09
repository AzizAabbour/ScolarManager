@extends('layouts.app')

@section('title', 'Liste des Groupes')

@section('content')

<div class="flex-between animate-fade-in" style="margin-bottom: 2rem;">
    <h2>
        <i class="fas fa-layer-group" style="color: var(--accent); margin-right: 0.5rem;"></i> 
        Liste des <span style="color: var(--primary);">Groupes</span>
    </h2>
    <a href="{{ route('groupes.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Nouveau Groupe
    </a>
</div>

<div class="card animate-fade-in" style="padding: 0; overflow: hidden;">
    <div class="table-container" style="box-shadow: none; margin-top: 0; border-radius: 0;">
        <table>
            <thead>
                <tr>
                    <th><i class="fas fa-users-rectangle"></i> Nom du Groupe</th>
                    <th style="width: 250px; text-align: center;"><i class="fas fa-gear"></i> Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($groupes as $g)
                <tr>
                    <td style="font-weight: 700; color: var(--primary);">{{ $g->nom }}</td>
                    <td>
                        <div style="display: flex; gap: 0.75rem; justify-content: center;">
                            <a href="{{ route('groupes.edit', $g->id) }}" class="btn" style="padding: 0.5rem 1rem; background: #f3f4f6; color: var(--primary); font-size: 0.85rem;">
                                <i class="fas fa-edit"></i> Modifier
                            </a>

                            <form action="{{ route('groupes.destroy', $g->id) }}" method="POST" onsubmit="return confirm('Supprimer ce groupe ?');" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 0.5rem 1rem; font-size: 0.85rem;">
                                    <i class="fas fa-trash"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" style="text-align: center; color: var(--text-muted); padding: 4rem;">
                        <i class="fas fa-folder-open" style="display: block; font-size: 2rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                        Aucun groupe trouvé.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection