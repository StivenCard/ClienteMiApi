<form action="{{ $action }}" method="POST">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control"
               value="{{ old('name', $estudiante['name'] ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" name="email" id="email" class="form-control"
               value="{{ old('email', $estudiante['email'] ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Teléfono</label>
        <input type="text" name="phone" id="phone" class="form-control"
               value="{{ old('phone', $estudiante['phone'] ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="lenguage" class="form-label">Lenguaje</label>
        <input type="text" name="lenguage" id="lenguage" class="form-control"
               value="{{ old('lenguage', $estudiante['lenguage'] ?? '') }}">
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-success">
            {{ $buttonText }}
        </button>
    </div>
</form>
