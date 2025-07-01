@extends("layouts.main")


@section("titulo", "Formulario de registro")


@section("contenido")


<div class="container-fluid my-5">

    <h1 class="display-4 fw-bold">📃 Artículos</h1>
    <div class="text-end mb-4">
        <a href="{{ route('admin.articuloFormulario') }}" class="btn btn-warning btn-lg">Nuevo formulario</a>
    </div>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha de creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $r)
            <tr>
                <td>{{ $r->titulo }}</td>
                <td>{{ $r->descripcion }}</td>
                <td>{{ $r->created_at ?? "Sin fecha" }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection