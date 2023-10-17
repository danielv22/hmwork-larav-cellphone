@extends('layouts\base')

@section('content')
    <main class="container">
        <div class="row">
            <h1 class="alert alert-success text-center">
                {{ $cellphone->marca . ' ' . $cellphone->referencia }}
            </h1>
        </div>

        <div class="row">
            <div class="card my-3 md">
                <div class="row g-8">
                    <div class="col md-4">
                        <img src="../../resources/images/4477610_2.png" class="ms-7 mt-5" alt="Cellphone">
                    </div>
                    <div class="col md-4">
                        <div class="card-body">
                            <p class="card-text"><b>Pantalla:</b> {{ $cellphone->tamano_pantalla }}</p>
                            <p class="card-text"><b>Resolución:</b> {{ $cellphone->resolucion }}</p>
                            <p class="card-text"><b>Procesador:</b> {{ $cellphone->marca_procesador }}</p>
                            <p class="card-text">
                                <b>Velocidad del procesador:</b>
                                {{ $cellphone->velocidad_procesador }}
                            </p>
                            <p class="card-text"><b>Memoria RAM:</b> {{$cellphone->memoria_ram}}</p>
                            <p class="card-text">
                                <b>Capacidad Memoria Interna:</b>
                                {{$cellphone->memoria_interna}}
                            </p>
                            <p class="card-text"><b>Precio:</b> {{$cellphone->precio}}</p>
                            <p class="card-text"><b>Descuento:</b> {{$cellphone->descuento}}%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 mt-1">
            <a href="{{ route('cellphones.index') }}" class="btn btn-primary">Regresar</a>
        </div>
    </main>
@endsection
