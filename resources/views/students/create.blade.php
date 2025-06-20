<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Registrar Estudiante</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

        <style>
            body {
                font-family: sans-serif;
                background-color: #f8f9fa;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="text-center text-primary mb-4">
                <i class="bi bi-person-plus-fill"></i> Registrar Estudiante
            </h2>

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            @include('students.form.form', [
                                'action' => route('estudiantes.store'),
                                'method' => 'POST',
                                'buttonText' => 'Registrar'
                            ])
                            <div class="mt-3 text-center">
                                <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-secondary">
                                    ← Volver al listado
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
