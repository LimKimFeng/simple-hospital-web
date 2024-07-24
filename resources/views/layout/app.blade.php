<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">My App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{ route('pasiens.index') }}" class="nav-link" aria-current="page">Pasien</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dokter.index') }}" class="nav-link" aria-current="page">Dokter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- content -->
        @yield('content')

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('script')
</body>
</html>
