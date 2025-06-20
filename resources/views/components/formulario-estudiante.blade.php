@props([
    'action',
    'method' => 'POST',
    'buttonText' => 'Guardar',
    'estudiante' => null
])

<form action="{{ $action }}" method="POST">
    @csrf
    @if(in_array($method, ['PUT', 'PATCH']))
        @method($method)
    @endif

    {{-- Nombre --}}
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control"
            value="{{ old('name', $estudiante['name'] ?? '') }}">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Correo --}}
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" name="email" id="email" class="form-control"
            value="{{ old('email', $estudiante['email'] ?? '') }}">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Teléfono --}}
    <div class="mb-3">
        <label for="phone" class="form-label">Teléfono</label>
        <input type="text" name="phone" id="phone" class="form-control"
            value="{{ old('phone', $estudiante['phone'] ?? '') }}">
        @error('phone')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Lenguaje --}}
    <div class="mb-3">
        <label for="lenguage" class="form-label">Lenguaje</label>
        <input type="text" name="lenguage" id="lenguage" class="form-control"
            value="{{ old('lenguage', $estudiante['lenguage'] ?? '') }}">
        @error('lenguage')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-success">
            {{ $buttonText }}
        </button>
    </div>
</form>
