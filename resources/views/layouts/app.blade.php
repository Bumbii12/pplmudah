<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Praktikum - Sistem Informasi</title>
    <!-- Link CSS (Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container-fluid">
        <!-- Navbar / Menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Sistem Jadwal Praktikum</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jadwal.index') }}">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kelas.index') }}">Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('asisten_dosen.index') }}">Asisten Dosen</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        @yield('content')

    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <p>&copy; {{ date('Y') }} Sistem Jadwal Praktikum - Universitas Bengkulu</p>
    </footer>

    <!-- Optional: JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
