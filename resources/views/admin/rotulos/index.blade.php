@extends('admin.layout')

@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Lista de Rotulos<br><small>En esta sección puede ver todos los rotulos registrados</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Rotulos</li>
        <li><a href="">Lista de Rotulos</a></li>
    </ul>

    <!-- END Forms General Header -->
    <!-- Datatables Content -->

    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            @can('haceAccess', 'user.create')
            <a href="{{ route('rotulos.create') }}" class="btn btn-info">Crear Nuevo</a>
            @endcan
            <table id="example-datatable" class="table table-center table-condensed table-bordered">
                <thead>
                <tr>
                    <th>Remitente</th>
                    <th>Cargo</th>
                    <th>Referencia</th>
                    <th>Destinatario</th>
                    <th>Cargo</th>
                    <th>Celular</th>
                    <th>Municipio</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>

                @foreach($rotulos as $rotulo)
                    <tr class="text-center">
                        <td>{{ $rotulo->user->person->name }} {{ $rotulo->user->person->app }} {{ $rotulo->user->person->apm }}</td>
                        <td>{{ $rotulo->user->rol[0]->name}}</td>
                        <td>{{ $rotulo->referencia }}</td>
                        <td>{{ $rotulo->destinatario }}</td>
                        <td>{{ $rotulo->cargo }}</td>
                        <td>{{ $rotulo->celular }}</td>
                        <td>{{ $rotulo->municipio }}</td>
                        <td class="text-center">
                            <div class="btn-group">



                                    <a href="{{ route('rotulos.edit', $rotulo) }}" data-toggle="tooltip" title="Editar" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>

                                    <a href="{{ route('generarPDF', $rotulo) }}" target="_blank" data-toggle="tooltip" title="PDF" class="btn btn-xs btn-info"><i class="fa fa-file-pdf-o"></i></a>


                                    <form method="POST"
                                          action="{{ route('rotulos.destroy', $rotulo) }}"
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


