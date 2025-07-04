@extends("layouts.main")


@section("titulo", "Artículos")


@section("contenido")

<br><br>
<h5><b>Resultados de la busqueda: </b> <span class="text-muted">{{ request('busqueda') }}</span> </h5>
<br>
<div class="container d-flex flex-wrap justify-content-center">
@foreach ($resultados as $a)
<x-card autor="{{ $a->usuario->nombre }}" id="{{ $a->id }}" imagen="{{ $a->portada }}" titulo="{{ $a->titulo }}" descripcion="{{ $a->descripcion }}"></x-card>
@endforeach

</div>
{{ $resultados->links('pagination::bootstrap-5') }}
@endsection