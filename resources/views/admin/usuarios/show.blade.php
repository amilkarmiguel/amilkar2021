@extends('admin.layout')

@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Datos Personales del Usuario<br><small>En esta sección puede ver los datos personales de un usuario</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Usuarios</li>
        <li><a href="">Datos Personales del usuario</a></li>
    </ul>

    <!-- END Forms General Header -->
    <!-- Datatables Content -->

    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            <a href="{{ route('usuarios.create') }}" class="btn btn-info">Crear Nuevo</a>
            <table id="example-datatable" class="table table-center table-condensed table-bordered">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Rol(es)</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Carnet de Identidad</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                </tr>
                </thead>
                <tbody>


                    <tr class="text-center">
                        <td>{{ $user->email }}</td>
                        @isset($user->roles[0]->name)
                        <td>{{ $user->roles[0]->name }}</td>
                        @endisset
                        <td>{{ $user->person->name }}</td>
                        <td>{{ $user->person->app }}</td>
                        <td>{{ $user->person->apm }}</td>
                        <td>{{ $user->person->ci }}</td>
                        <td>{{ $user->person->phone }}</td>
                        <td>{{ $user->person->address }}</td>
                    </tr>



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


