@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Productos <i class="fa fa-box"></i></h1>
       
        @include("notificacion")
        <div class="table-responsive">
            <table class="table ">
                <thead>
                <tr>
                    <th scope="col">Código de barras</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio de compra</th>
                    <th scope="col">Precio de venta</th>
                    <th scope="col">Utilidad</th>
                    <th scope="col">Existencia</th>

                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td> </td>
                        <td> </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection