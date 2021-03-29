@extends('admin.layout')

@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Lista de divisiones<br><small>En esta sección puede ver todos las divisiones registrados</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>divisiones</li>
        <li><a href="">Lista de usuario</a></li>
    </ul>

    <!-- END Forms General Header -->
    <!-- Datatables Content -->

    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            @can('haceAccess', 'user.create')
            <a href="{{ route('divisiones.create') }}" class="btn btn-info">Crear Nuevo</a>
            @endcan
            <table id="example-datatable" class="table table-center table-condensed table-bordered">
                <thead>
                <tr>
                    <th>Sigla</th>
                    <th>Nombre</th>
                    <th>Municipio</th>
                    <th>Zona</th>
                    <th>Calle</th>
                    <th>Oficina</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>

                @foreach($divisiones as $division)
                    <tr class="text-center">
                        <td>{{ $division->sigla }}</td>
                        <td>{{ $division->nombre }}</td>
                        <td>{{ $division->municipio }}</td>
                        <td>{{ $division->zona }}</td>
                        <td>{{ $division->calle }}</td>
                        <td>{{ $division->oficina }}</td>
                        <td class="text-center">
                            <div class="btn-group">

                                    <a href="{{ route('divisiones.show', $division) }}" data-toggle="tooltip" title="Ver" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a>


                                    <a href="{{ route('divisiones.edit', $division) }}" data-toggle="tooltip" title="Editar" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>


                                    <form method="POST"
                                          action="{{ route('divisiones.destroy', $division) }}"
                                          style="display: inline;">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-xs"
                                                onclick="return confirm('Estas seguro de querer eliminar este usuario')" data-toggle="tooltip" title="Eliminar"><i class="fa fa-times"></i>
                                        </button>
                                    </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dashboard Header -->



@endsection

@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/tablesDatatables.js') }}"></script>
    <script>$(function(){ TablesDatatables.init(); });</script>

@endpush


