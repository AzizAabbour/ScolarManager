@extends('layouts.app')

@section('title', 'Bienvenue')

@section('content')

<div style="text-align: center; padding: 5rem 0;">
    <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem; color: #0f172a;">
        Gestion Scolaire Simplifiée
    </h1>
    <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto 2.5rem;">
        Une solution propre et rapide pour gérer vos étudiants et vos groupes au quotidien.
    </p>

    <div style="display: flex; gap: 1rem; justify-content: center;">
        <a href="{{ route('etudiants.index') }}" class="btn btn-primary" style="padding: 0.75rem 2rem;">
            Liste des Étudiants
        </a>
        <a href="{{ route('groupes.index') }}" class="btn" style="padding: 0.75rem 2rem; border: 1px solid var(--border); color: var(--text-main); background: white;">
            Gérer les Groupes
        </a>
    </div>
</div>

<div class="grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: 2rem;">
    <div class="card" style="text-align: center;">
        <div style="background: #eef2ff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
            <i class="fas fa-check" style="color: var(--primary);"></i>
        </div>
        <h4>Simple</h4>
        <p style="color: var(--text-muted); font-size: 0.9rem;">Interface épurée sans distractions.</p>
    </div>
    <div class="card" style="text-align: center;">
        <div style="background: #ecfdf5; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
            <i class="fas fa-bolt" style="color: var(--success);"></i>
        </div>
        <h4>Rapide</h4>
        <p style="color: var(--text-muted); font-size: 0.9rem;">Navigation instantanée et efficace.</p>
    </div>
    <div class="card" style="text-align: center;">
        <div style="background: #fff1f2; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
            <i class="fas fa-heart" style="color: var(--danger);"></i>
        </div>
        <h4>Moderne</h4>
        <p style="color: var(--text-muted); font-size: 0.9rem;">Design soigné aux standards actuels.</p>
    </div>
</div>

@endsection
