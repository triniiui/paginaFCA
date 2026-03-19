<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA UADY - Réplica</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root { --uady-blue: #002d55; --uady-gold: #b58d1b; }
        .bg-uady-blue { background-color: var(--uady-blue); }
        .bg-uady-gold { background-color: var(--uady-gold); }
        .nav-link { color: white !important; font-weight: 500; }
    </style>
</head>
<body>
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <footer class="bg-uady-blue text-white text-center py-4 mt-5">
        <p>© 2026 Facultad de Contaduría y Administración - UADY</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>