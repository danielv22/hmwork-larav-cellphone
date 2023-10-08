@extends('layouts.base')

@section('title', 'Celulares')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Celulares</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Marca</th>
                        <th>Referencia</th>
                        <th>Pantalla</th>
                        <th>Resolución</th>
                        <th>Procesador</th>
                        <th>Vel. Procesador</th>
                        <th>RAM</th>
                        <th>Interna</th>
                        <th>Precio</th>
                        <th>Descuento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cellphones as $cellphone)
                    <tr>
                        <th>{{ $cellphone->id_cellphone }}</th>
                        <td>{{ $cellphone->marca }}</td>
                        <td>{{ $cellphone->referencia }}</td>
                        <td>{{ $cellphone->tamano_pantalla }}</td>
                        <td>{{ $cellphone->resolucion }}</td>
                        <td>{{ $cellphone->marca_procesador }}</td>
                        <td>{{ $cellphone->velocidad_procesador }}</td>
                        <td>{{ $cellphone->memoria_ram }}</td>
                        <td>{{ $cellphone->memoria_interna }}</td>
                        <td>${{ number_format($cellphone->precio, 2, ',', '.')  }}</td>
                        <td>{{ $cellphone->descuento }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('cellphones.edit', $cellphone)  }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="" method="POST" class="d-inline">
                                <input type="hidden" name="_token" value="tQBU7CdcOvuQjSfLihKYeWiF9TMXT7ul0AyRZI8D">                                        <input type="hidden" name="_method" value="DELETE">                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{--{{ $cellphones->links() }}--}}
        </div>
    </div>
@endsection
