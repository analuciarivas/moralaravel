@extends('layouts.app')
@section('content')

<div class="container body-form">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default">
              <div class="panel-heading">                  Ingrese a su cuenta

                  <!-- <strong>Ingrese a su cuenta</strong> -->
              </div>

              <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <!-- <label for="email" class="col-sm-3 control-label"></label> -->
                        <div class="col-sm-12">
                        <input id="email" type="email" class="form-control" name="email" placeholder="E-MAIL" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <!-- <label for="password" class="col-sm-3 control-label"></label> -->
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="password" name="password" placeholder="CONTRASEÑA" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>

                                </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                              </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                Login</button>
                        </div>


                    </div>
                  </form>
                </div>
                <div class="panel-footer">
                <a class="btn btn-link" href="{{ route('password.request') }}">Olvidó su clave?</a>  <!-- Recuperar contraseña -->
                <br/><a class="btn btn-link" href="{{ route('register') }}">No está registrado?</a> <!-- Crear una cuenta  -->
              </div>
      </div>
    </div>
  </div>
</div>


@endsection
