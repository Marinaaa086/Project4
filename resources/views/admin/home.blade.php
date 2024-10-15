<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h4 class="text-secondary">Selamat Datang, Admin {{ Auth::user()->name }}</h4>
            </div>
            <div class="col"></div>
            <div class="col-1">
                <a href="{{ route('logout') }}" style="text-decoration: none">
                    <p class="text-end text-black fw-semibold">Logout</p>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>