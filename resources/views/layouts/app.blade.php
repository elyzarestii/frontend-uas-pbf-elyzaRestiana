<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>data obat - dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap 5 & icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #d1f2eb, #ffffff);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .navbar {
            background-color: #2ecc71 !important; /* hijau mint */
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
            letter-spacing: 1px;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead {
            background-color: #a3e4d7;
            color: #145a32;
        }

        .table-hover tbody tr:hover {
            background-color: #d4efdf;
        }

        .btn-primary {
            background-color: #28b463;
            border: none;
        }

        .btn-warning {
            background-color: #f4d03f;
            border: none;
            color: #000;
        }

        .btn-danger {
            background-color: #e74c3c;
            border: none;
        }

        .container {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-capsule me-2"></i> data obat
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container py-5">
    @yield('content')
</div>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
