@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Ingresa tu Correo">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

@endsection
