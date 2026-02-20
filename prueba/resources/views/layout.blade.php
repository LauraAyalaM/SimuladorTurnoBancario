<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulador Turno Bancario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0f172a;
            color: #e5e7eb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #ffffff;
            font-weight: 600;
        }

        label {
            color: #cbd5e1;
            font-size: 0.9rem;
        }

        .card-dark {
    background-color: #1e293b;
    border: 1px solid #334155;
    border-radius: 14px;
    color: #e5e7eb; /* 🔥 fuerza texto claro dentro */
}

/* Forzar todo el texto dentro de card-dark */
.card-dark p,
.card-dark strong,
.card-dark span,
.card-dark div {
    color: #e5e7eb !important;
}

/* Títulos completamente blancos */
.card-dark h1,
.card-dark h2,
.card-dark h3,
.card-dark h4,
.card-dark h5,
.card-dark h6 {
    color: #ffffff !important;
}

        /* Inputs */
        input, select {
            background-color: #0f172a !important;
            color: #ffffff !important;
            border: 1px solid #334155 !important;
        }

        input::placeholder {
            color: #94a3b8 !important;
        }

        input:focus, select:focus {
            border-color: #2563eb !important;
            box-shadow: none !important;
        }

        /* Botones */
        .btn-primary {
            background-color: #2563eb;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .btn-success {
            background-color: #0ea5e9;
            border: none;
        }

        .btn-success:hover {
            background-color: #0284c7;
        }

        .btn-danger {
            background-color: #dc2626;
            border: none;
        }

        .btn-danger:hover {
            background-color: #b91c1c;
        }

        hr {
            border-color: #334155;
        }

        .title {
            letter-spacing: 1px;
        }

        .badge-turno {
            background-color: #2563eb;
            color: #ffffff;
            font-size: 1rem;
            padding: 6px 14px;
            border-radius: 10px;
        }

        .badge-secondary-dark {
            background-color: #334155;
            color: #e5e7eb;
        }

        .list-unstyled li {
            color: #e5e7eb;
        }
    </style>
</head>
<body>

<div class="container py-5">
    @yield('content')
</div>

</body>
</html>