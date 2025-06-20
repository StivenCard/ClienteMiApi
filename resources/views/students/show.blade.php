<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Detalle del Estudiante</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Estudiante #{{ $estudiante['id'] }}
                </div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $estudiante['name'] }}</p>
                    <p><strong>Correo electrónico:</strong> {{ $estudiante['email'] }}</p>
                    <p><strong>Teléfono:</strong> {{ $estudiante['phone'] }}</p>
                    <p><strong>Lenguaje:</strong> {{ $estudiante['lenguage'] ?? 'N/A' }}</p>
                    <p><strong>Fecha de creacion: {{ $estudiante['created_at'] }}</strong></p>
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">← Volver al listado</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
