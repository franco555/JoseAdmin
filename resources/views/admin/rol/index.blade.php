@extends("theme.$theme.layout")

@section('titulo')
    Roles
@endsection
@section('NombrePagina')
    Roles
@endsection
@section('DescripcionPagina')
    Administrar los roles que los usuarios pueden tener
@endsection
@section('btnNuevo')
    {{route("rol")}}
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12 mt-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Roles</h3>
                </div>
                <div class="box-body">
                        <table class="table table-condensed">
                            <tr>
                                <th>Nombre</th>
                                <th style="width: 40px">Acci&oacute;n</th>
                            </tr>
                            @foreach ($rols as $item)
                                <tr>
                                    <td>{{$item->Nombre}}</td>
                                    <td>
                                            {{$item->IsActive}}
                                        <a class="btn btn-sm btn-warning">editar</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                                
                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection