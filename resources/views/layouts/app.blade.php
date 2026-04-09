<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScolarManager - @yield('title', 'Accueil')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <a href="/" class="logo">
                    <i class="fas fa-graduation-cap"></i> ScolarManager
                </a>
                <div class="nav-links">
                    <a href="{{ route('etudiants.index') }}">
                        <i class="fas fa-user-graduate"></i> Étudiants
                    </a>
                    <a href="{{ route('groupes.index') }}">
                        <i class="fas fa-users"></i> Groupes
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main class="container animate-fade-in">
        @if(session('success'))
            <div style="background: var(--success); color: white; padding: 1rem; border-radius: 0.5rem; margin-bottom: 2rem;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

</body>
</html>