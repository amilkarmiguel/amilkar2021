@extends('admin.layout')


@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Lista de Roles<br><small>En esta sección puede ver todos los roles creados</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Roles</li>
        <li><a href="">Lista de roles</a></li>
    </ul>


    <div class="block full" xmlns="http://www.w3.org/1999/html">
        <div class="table-responsive">
            @can('haveAccess', 'user.create')
            <a class="btn btn-primary float-right"  href="{{ route('role.create') }}">Create</a> <br><br>
            @endcan
            <table id="example-datatable" class="table table-center table-condensed table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Full Access</th>
                    <th colspan="3">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr class="text-center">
                        <th scope="row">{{ $role->id }}</th>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->slug }}</td>
                        <td>{{ $role->description }}</td>

                        <td>
                            <label class="switch switch-danger" for="#fullAccess">
                                <input type="checkbox" id="fullAccess" name="full-access"
                                       @if($role['full-access'] === "yes")
                                           checked
                                       @endif
                                >
                                <span data-toggle="tooltip" title="{{ $role['full-access'] }}  Access"></span>
                            </label>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('role.show', $role->id) }}">Show</a></td>
                        <td>
                            <a class="btn btn-sm btn-success" href="{{ route('role.edit', $role->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $roles->links() }}
        </div>





    </div>

@endsection



@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/tablesDatatables.js') }}"></script>
    <script>$(function(){ TablesDatatables.init(); });</script>

@endpush


