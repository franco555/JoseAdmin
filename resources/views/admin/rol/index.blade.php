@extends("theme.$theme.layout")

@section('titulo')
    Roles
@endsection
@section('NombrePagina')
    Crear Roles
@endsection
@section('DescripcionPagina')
    Creando Rol Nuevo
@endsection
@section('btnNuevo')
    {{route("crear_rol")}}
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12 mt-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Roles</h3>
                </div>
                <div class="box-body">
                        <table class="table table-condensed table-striped">
                            <thead>
                                <tr >
                                    <th>Nombre</th>
                                    <th style="width: 40px">Acci&oacute;n</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rols as $item)
                                    <tr>
                                        <td>{{$item->Nombre}}</td>
                                        <td>
                                            @if($item->IsActive)
                                                <a class="btn btn-sm btn-warning">editar</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection