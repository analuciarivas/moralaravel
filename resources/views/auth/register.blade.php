@extends('layouts.app')
@section('content')
<div class="container body-form">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Cree una cuenta
                  <!-- <strong>Cree una cuenta</strong> -->
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <!-- <label for="name" class="col-md-4 control-label">Nombre</label> -->

                            <div class="col-sm-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="NOMBRE" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail</label> -->

                            <div class="col-sm-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-MAIL" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                            <div class="col-sm-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="CONTRASEÑA" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label> -->

                            <div class="col-sm-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="CONFIRME SU CONTRASEÑA" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                  </div>
                  <div class="panel-footer">
                  <a class="btn btn-link" href="{{ route('login') }}">Ya está registrado?</a> <!-- Crear una cuenta  -->
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
