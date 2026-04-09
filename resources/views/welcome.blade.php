@extends('layouts.app')

@section('title', 'Bienvenue')

@section('content')

<div style="text-align: center; padding: 6rem 0;" class="animate-fade-in">
    <h1 style="font-size: 3.5rem; font-weight: 800; margin-bottom: 1.5rem; color: var(--primary); letter-spacing: -1px;">
        Gestion Scolaire <span style="color: var(--accent);">Simplifiée</span>
    </h1>
    <p style="color: var(--text-muted); font-size: 1.2rem; max-width: 700px; margin: 0 auto 3rem; line-height: 1.8;">
        Optimisez la gestion de vos étudiants et de vos groupes avec notre solution moderne, rapide et intuitive. Un outil conçu pour les professionnels de l'éducation.
    </p>

    <div style="display: flex; gap: 1.5rem; justify-content: center;">
        <a href="{{ route('etudiants.index') }}" class="btn btn-primary" style="padding: 1rem 2.5rem;">
            <i class="fas fa-user-graduate"></i> Liste des Étudiants
        </a>
        <a href="{{ route('groupes.index') }}" class="btn btn-accent" style="padding: 1rem 2.5rem;">
            <i class="fas fa-layer-group"></i> Gérer les Groupes
        </a>
    </div>
</div>

<div class="grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
    <div class="card" style="text-align: center;">
        <div style="background: rgba(247, 181, 56, 0.1); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
            <i class="fas fa-shield-halved" style="color: var(--accent); font-size: 1.5rem;"></i>
        </div>
        <h4 style="font-size: 1.25rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">Simple & Sécurisé</h4>
        <p style="color: var(--text-muted); font-size: 0.95rem;">Une interface épurée garantissant une prise en main immédiate et une sécurité des données optimale.</p>
    </div>
    
    <div class="card" style="text-align: center;">
        <div style="background: rgba(120, 1, 22, 0.1); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
            <i class="fas fa-bolt-lightning" style="color: var(--primary); font-size: 1.5rem;"></i>
        </div>
        <h4 style="font-size: 1.25rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">Performance Élevée</h4>
        <p style="color: var(--text-muted); font-size: 0.95rem;">Navigation ultra-fluide et recherches instantanées pour une productivité accrue au quotidien.</p>
    </div>

    <div class="card" style="text-align: center;">
        <div style="background: rgba(247, 181, 56, 0.1); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
            <i class="fas fa-wand-magic-sparkles" style="color: var(--accent); font-size: 1.5rem;"></i>
        </div>
        <h4 style="font-size: 1.25rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">Design Moderne</h4>
        <p style="color: var(--text-muted); font-size: 0.95rem;">Une esthétique soignée aux standards du web moderne pour une expérience utilisateur premium.</p>
    </div>
</div>

@endsection

