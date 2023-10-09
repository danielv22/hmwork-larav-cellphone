@extends('layouts.base')

@section('title', 'Celulares')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Agregar</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('cellphones.store') }}" method="post" class="row">
                @csrf
                <div class="col-6">
                    <label for="referencia" class="form-label">Referencia</label>
                    <input type="text" class="form-control" id="referencia" name="referencia">
                </div>
                <div class="col-6">
                    <label for="marca" class="form-label">Marca</label>
                    <select name="marca" id="marca" class="form-control form-select">
                        <option value="">Seleccione</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand }}">
                                {{ $brand }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="tamano_pantalla" class="form-label">Tamaño de Pantalla</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="tamano_pantalla" name="tamano_pantalla">
                        <span class="input-group-text" id="basic-addon2">Pulgadas</span>
                    </div>
                </div>
                <div class="col-6">
                    <label for="resolucion" class="form-label">Resolución</label>
                    <select name="resolucion" id="resolucion" class="form-control form-select">
                        <option value="">Seleccione</option>
                        @foreach($resolutions as $resolution)
                            <option value="{{ $resolution }}">
                                {{ $resolution }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="marca_procesador" class="form-label">Marca del Procesador</label>
                    <select name="marca_procesador" id="marca_procesador" class="form-control form-select">
                        <option value="">Seleccione</option>
                        @foreach($procesorBrands as $procesorBrand)
                            <option value="{{ $procesorBrand }}">
                                {{ $procesorBrand }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="velocidad_procesador" class="form-label">Velocidad del procesador</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="velocidad_procesador" name="velocidad_procesador">
                        <span class="input-group-text" id="basic-addon2">GHz</span>
                    </div>
                </div>
                <div class="col-6">
                    <label for="memoria_ram" class="form-label">Memoria RAM</label>
                    <div class="input-group">
                        <select name="memoria_ram" id="memoria_ram" class="form-control form-select">
                            <option value="">Seleccione</option>
                            @foreach($RAMMemories as $ram)
                                <option value="{{ $ram }}">
                                    {{ $ram }}
                                </option>
                            @endforeach
                        </select>
                        <span class="input-group-text" id="basic-addon2">GB</span>
                    </div>
                </div>
                <div class="col-6">
                    <label for="memoria_interna" class="form-label">Memoria Interna</label>
                    <div class="input-group">
                        <select name="memoria_interna" id="memoria_interna" class="form-control form-select">
                            <option value="">Seleccione</option>
                            @foreach($storages as $storage)
                                <option value="{{ $storage }}">
                                    {{ $storage }}
                                </option>
                            @endforeach
                        </select>
                        <span class="input-group-text" id="basic-addon2">GB</span>
                    </div>
                </div>
                <div class="col-6">
                    <label for="precio" class="form-label">Precio</label>
                    <div class="input-group">
                        <span class="input-group-text" id="precio">COP $</span>
                        <input type="number" class="form-control" id="precio" name="precio">
                    </div>
                </div>
                <div class="col-6">
                    <label for="descuento" class="form-label">Descuento</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="descuento" name="descuento">
                        <span class="input-group-text" id="basic-addon2">%</span>
                    </div>
                </div>
                <div class="col-12 my-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 mb-4">
            <div class="d-grid gap-2">
                <a href="{{ route('cellphones.index') }}" class="btn btn-danger">Regresar</a>
            </div>
        </div>
    </div>
@endsection
