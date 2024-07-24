<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom1.css') }}">
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
