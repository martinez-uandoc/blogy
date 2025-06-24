@extends("layouts.main")


@section("titulo", "Artículos")


@section("contenido")
<h1 class="display-1 fw-bold text-white bg-dark">Artículo</h1>

<h1>{{ $carrera }}</h1>
<h3>({{ $semestre }}) {{ $unidad }}</h3>
@endsection