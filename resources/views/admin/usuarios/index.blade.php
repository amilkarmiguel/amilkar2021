@extends('admin.layout')

@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Lista de Usuarios<br><small>En esta sección puede ver todos los usuarios registrados</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Usuarios</li>
        <li><a href="">Lista de usuario</a></li>
    </ul>

    <!-- END Forms General Header -->
    <!-- Datatables Content -->

    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            @can('haceAccess', 'user.create')
            <a href="{{ route('usuarios.create') }}" class="btn btn-info">Crear Nuevo</a>
            @endcan
            <table id="example-datatable" class="table table-center table-condensed table-bordered">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Carnet de Identidad</th>

                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr class="text-center">
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->person->name }}</td>
                        <td>{{ $user->person->app }}</td>
                        <td>{{ $user->person->apm }}</td>
                        <td>{{ $user->person->ci }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                @can('view', [$user, ['user.show', 'userown.show']])
                                    <a href="{{ route('usuarios.show', $user) }}" data-toggle="tooltip" title="Ver" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a>
                                @endcan
                                @can('update', [$user, ['user.edit', 'userown.edit']])
                                    <a href="{{ route('usuarios.edit', $user) }}" data-toggle="tooltip" title="Editar" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                @endcan
                                @can('haveAccess', 'user.destroy')
                                    <form method="POST"
                                          action="{{ route('usuarios.destroy', $user) }}"
                                          style="display: inline;">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-xs"
                                                onclick="return confirm('Estas seguro de querer eliminar este usuario')" data-toggle="tooltip" title="Eliminar"><i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                @endcan
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


