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
                <li>Divisiones</li>
                <li><a href="">Crear Nuevo</a></li>
            </ul>
            <!-- END Forms General Header -->

            <div class="row">
                <div class="col-md-12">
                    <!-- Basic Wizard Block -->
                    <div class="block">
                        <!-- Basic Wizard Title -->
                        <div class="block-title text-center">
                            <h2><strong>Registrar Rotulo</strong> </h2>
                        </div>
                        <!-- END Basic Wizard Title -->

                        <!-- Input Groups Row -->
                        <div class="row">
                            <form action="{{ route('rotulos.store') }}" method="post" class="form-horizontal form-bordered">
                                @csrf
                            <div class="col-md-12">
                                <div class="block">
                                    <div class="block-title text-center">
                                        <h3>Datos del Remitente</h3>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="example-firstname" name="nombre" class="form-control" value="{{ $remitente->name }} {{ $remitente->app }} {{ $remitente->apm }}" placeholder="Ingrese una nombre" readonly>
                                                @if ($errors->has('nombre'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('nombre') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{ $user->id }}" name="user_id">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="cargo" name="cargo" class="form-control" value="{{ $user->rol[0]->name }}"  readonly>
                                                @if ($errors->has('cargo'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('cargo') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="referencia" name="referencia" class="form-control" value="{{ old('referencia') }}" placeholder="Ingrese la referencia">
                                                @if ($errors->has('referencia'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('referencia') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="block-title text-center">
                                        <h3>Datos del Destinatario</h3>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                <input type="text" id="destinatario" name="destinatario" class="form-control" value="{{ old('destinatario') }}" placeholder="Ingrese en nombre del destinatario">
                                                @if ($errors->has('destinatario'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('destinatario') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <input type="text" id="cargoD" name="cargoD" class="form-control" value="{{ old('cargoD') }}" placeholder="Ingrese el cargo">
                                                @if ($errors->has('cargoD'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('cargoD') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                                <input type="text" id="celular" name="celular" class="form-control" value="{{ old('celular') }}" placeholder="Ingrese el celular">
                                                @if ($errors->has('celular'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('celular') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                                <input type="text" id="municipio" name="municipio" class="form-control" value="{{ old('municipio') }}" placeholder="Ingrese el municipio">
                                                @if ($errors->has('municipio'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('municipio') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-actions text-center">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info">Registrar</button>
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


