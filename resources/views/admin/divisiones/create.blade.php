@extends('admin.layout')

@section('content')


            <!-- Forms General Header -->
            <div class="content-header">
                <div class="header-section">
                    <h1>
                        <i class="gi gi-notes_2"></i>Registrar Division<br><small>En esta sección puede crear una nuevoa Division</small>
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
                            <h2><strong>Registrar Division</strong> </h2>
                        </div>
                        <!-- END Basic Wizard Title -->

                        <!-- Input Groups Row -->
                        <div class="row">
                            <form action="{{ route('divisiones.store') }}" method="post" class="form-horizontal form-bordered">
                                @csrf
                            <div class="col-md-12">
                                <div class="block">
                                    <div class="block-title text-center">
                                        <h3>Datos de la division</h3>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="example-firstname" name="sigla" class="form-control" value="{{ old('sigla') }}" placeholder="Ingrese una sigla">
                                                @if ($errors->has('sigla'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('sigla') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Ingrese el nombre de division">
                                                @if ($errors->has('nombre'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('nombre') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="municipio" name="municipio" class="form-control" value="{{ old('municipio') }}" placeholder="Ingrese el municipio">
                                                @if ($errors->has('municipio'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('municipio') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                <input type="text" id="zona" name="zona" class="form-control" value="{{ old('zona') }}" placeholder="Ingrese la zona">
                                                @if ($errors->has('zona'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('zona') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <input type="text" id="example-phone" name="calle" class="form-control" value="{{ old('calle') }}" placeholder="Ingrese la calle">
                                                @if ($errors->has('calle'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('calle') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                                <input type="text" id="example-address" name="oficina" class="form-control" value="{{ old('oficina') }}" placeholder="Ingrese la oficina">
                                                @if ($errors->has('oficina'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('oficina') }}
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


