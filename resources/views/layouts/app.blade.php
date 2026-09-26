<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Aplikasi User' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7fe;
            color: #2b3674;
        }
        .card-ui {
            background: #ffffff;
            border-radius: 20px;
            border: none;
            box-shadow: 0 18px 40px rgba(112, 144, 176, 0.12);
        }
        .table-custom th {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #a3aed1;
            border-bottom: 2px solid #e9edf7;
            padding-bottom: 1rem;
        }
        .table-custom td {
            vertical-align: middle;
            color: #2b3674;
            font-weight: 500;
            border-bottom: 1px solid #f4f7fe;
        }
        .table-custom tr:hover td {
            background-color: #f8faff;
        }
        .btn-brand {
            background-color: #4318ff;
            color: white;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .btn-brand:hover {
            background-color: #3311db;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 24, 255, 0.3);
        }
        .form-control-custom {
            border-radius: 12px;
            border: 1px solid #e0e5f2;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
        }
        .form-control-custom:focus {
            border-color: #4318ff;
            box-shadow: 0 0 0 4px rgba(67, 24, 255, 0.1);
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    @include('components.navbar')
    <main class="container my-5 flex-grow-1" style="max-width: 1000px;">
        @yield('content')
    </main>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>