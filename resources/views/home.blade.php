@extends('layouts.app')
@section('content')

 <div class="container body-form" style="background:white">



  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Que estas buscando?</div>
                <div class="panel-body">

                    <div class="row">
                            <div class="col-sm-4">
                              <a href="/producto"><img src="/img/calzaDestacados.jpg" class="img-thumbnail" alt=" " width=300px>
                        			<h3>Embarazo</h3></a>
                        		</div>

                        		<div class="col-sm-4">
                        			<a href="/producto"><img src="/img/moratop-02.jpg" class="img-thumbnail" alt=" " width=300px>
                        			<h3>Lactancia</h3></a>
                        		</div>

                        		<div class="col-sm-4">
                        			<a href="/producto"><img src="/img/trusaDestacados.jpg" class="img-thumbnail" alt=" " width=300px>
                        			<h3>Post Parto</h3></a>
                        		</div>
                    </div>
                </div>
      </div>
    </div>
  </div>



  <div class="col-md-4 col-md-offset-4">
    <div class="panel-default">
      <div class="panel-heading">Editar cuenta</div>
      <div class="panel-body">
          <form class="" action="/editarController/{{$user->id}}" method="post">
            {{ csrf_field() }}
            {{ method_field('cambiar') }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-12">
                  <input id="name" type="text" class="form-control" name="name" value="" placeholder="Cambia  tu nombre: {{$user->name}}" required autofocus>
                  @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
              </div>
            </div>
            <!-- <div class="form-group">
              <a class="btn btn-link" href="{{ route('password.email') }}">Cambiar su clave?</a>
            </div> -->
          </form>
    </div>
    <div class="panel-footer">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Cambiar</button>
        <button type="submit" class="btn btn-lg btn-primary btn-block" href="{{ route('logout') }}">Eliminar usuario</button>
        </div>
    </div>

  </div>

  </div>
  </div>





@endsection
