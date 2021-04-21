@extends('admin.layout')

@section('content')


            <!-- Forms General Header -->
            <div class="content-header">
                <div class="header-section">
                    <h1>
                        <i class="gi gi-notes_2"></i>Registrar Rotulo<br><small>En esta sección puede registrar un Rotulo</small>
                    </h1>
                </div>
            </div>
            <ul class="breadcrumb breadcrumb-top">
                <li>Reportes</li>
                <li><a href="">Buscar por CI</a></li>
            </ul>
            <!-- END Forms General Header -->

            <div class="row">
                <div class="col-md-12">
                    <!-- Basic Wizard Block -->
                    <div class="block">
                        <!-- Basic Wizard Title -->
                        <div class="block-title text-center">
                            <h2><strong>Buscar por CI</strong> </h2>
                        </div>
                        <!-- END Basic Wizard Title -->

                        <!-- Input Groups Row -->
                        <div class="row">
                            <form action="{{ route('reports.userCi') }}" method="post" class="form-horizontal form-bordered">
                                @csrf
                            <div class="col-md-12">
                                <div class="block">
                                    <div class="block-title text-center">
                                        <h3>Ingrese el Carnet de Identidad</h3>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="example-firstname" name="ci" class="form-control" value="{{ old('ci') }}" placeholder="Ingrese ci">
                                                @if ($errors->has('ci'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('ci') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-actions text-center">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info">Buscar</button>
                                        </div>
                                    </div>
                                    <!-- END Input Groups - Icons/Text Content -->
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- END Input Groups Row -->


                    </div>
                    <!-- END Basic Wizard Block -->
                </div>
            </div>
            <!-- END Forms General -->
@endsection

@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/formsWizard.js') }}"></script>
    <script>$(function(){ FormsWizard.init(); });</script>

@endpush


