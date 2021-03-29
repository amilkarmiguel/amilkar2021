@extends('admin.layout')

@section('content')


            <!-- Forms General Header -->
            <div class="content-header">
                <div class="header-section">
                    <h1>
                        <i class="gi gi-notes_2"></i>Registrar Usuario<br><small>En esta sección puede crear un nuevo usuario</small>
                    </h1>
                </div>
            </div>
            <ul class="breadcrumb breadcrumb-top">
                <li>Usuarios</li>
                <li><a href="">Crear Nuevo</a></li>
            </ul>
            <!-- END Forms General Header -->

            <div class="row">
                <div class="col-md-9">
                    <!-- Basic Wizard Block -->
                    <div class="block">
                        <!-- Basic Wizard Title -->
                        <div class="block-title text-center">
                            <h2><strong>Registrar Usuario</strong> </h2>
                        </div>
                        <!-- END Basic Wizard Title -->

                        <!-- Input Groups Row -->
                        <div class="row">
                            <form action="{{ route('usuarios.store') }}" method="post" class="form-horizontal form-bordered">
                                @csrf
                            <div class="col-md-6">
                                <!-- Input Groups - Icons/Text Block -->
                                <div class="block">
                                    <!-- Input Groups - Icons/Text Title -->
                                    <div class="block-title text-center">
                                        <h3>Datos de la cuenta</h3>
                                    </div>
                                    <!-- END Input Groups - Icons/Text Title -->

                                    <!-- Input Groups Content -->

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" id="example-email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Ingrese su correo Electronico" autofocus>
                                                    @if ($errors->has('email'))
                                                        <small class="form-text text-danger">
                                                            {{ $errors->first('email') }}
                                                        </small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" id="example-password" name="password" class="form-control" placeholder="Ingrese su contraseña">
                                            @if ($errors->has('password'))
                                                <small class="form-text text-danger">
                                                    {{ $errors->first('password') }}
                                                </small>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password" id="example-password2" name="password2" class="form-control" placeholder="Repita su contraseña">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="block-title text-center">
                                        <h3>Datos Personales</h3>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="example-firstname" name="name" class="form-control" value="{{ old('name') }}" placeholder="Ingrese sus nombres">
                                                @if ($errors->has('name'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('name') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="app" name="app" class="form-control" value="{{ old('app') }}" placeholder="Ingrese su apellido Paterno">
                                                @if ($errors->has('app'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('app') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" id="apm" name="apm" class="form-control" value="{{ old('apm') }}" placeholder="Ingrese su apellido Materno">
                                                @if ($errors->has('apm'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('apm') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                <input type="text" id="ci" name="ci" class="form-control" value="{{ old('ci') }}" placeholder="Ingrese su # de Carnet de Identidad">
                                                @if ($errors->has('ci'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('ci') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <input type="text" id="example-phone" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Ingrese su # de celular (whatsapp)">
                                                @if ($errors->has('phone'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('phone') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                                <input type="text" id="example-address" name="address" class="form-control" value="{{ old('address') }}" placeholder="Ingrese su dirección">
                                                @if ($errors->has('address'))
                                                    <small class="form-text text-danger">
                                                        {{ $errors->first('address') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>



                                    <!-- END Input Groups - Icons/Text Content -->
                                </div>
                                <div class="form-group form-actions text-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-info">Registrar</button>
                                    </div>
                                </div>

                            </div>
                            </form>
                        </div>
                        <!-- END Input Groups Row -->


                    </div>
                    <!-- END Basic Wizard Block -->
                </div>
                <div class="col-md-3">
                    <!-- Wizard with Validation Block -->
                    <div class="block">
                        <!-- Wizard with Validation Title -->
                        <div class="block-title">
                            <h2><strong>Publicidad</strong></h2>
                        </div>
                        <!-- END Wizard with Validation Title -->

                    </div>
                    <!-- END Wizard with Validation Block -->
                </div>
            </div>
            <!-- END Forms General -->
@endsection

@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/formsWizard.js') }}"></script>
    <script>$(function(){ FormsWizard.init(); });</script>

@endpush


