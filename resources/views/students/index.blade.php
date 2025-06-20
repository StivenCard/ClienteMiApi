<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Estudiantes Registrados</h2>

        {{-- Mensajes de éxito --}}
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Botón para crear estudiante --}}
        <div class="mb-3 text-end">
            <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">
                + Agregar Estudiante
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $estudiante['name'] }}</td>
                            <td>{{ $estudiante['email'] }}</td>
                            <td>{{ $estudiante['phone'] }}</td>
                            <td>
                                <a href="{{ route('estudiantes.show', $estudiante['id']) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('estudiantes.edit', $estudiante['id']) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('estudiantes.destroy', $estudiante['id']) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
