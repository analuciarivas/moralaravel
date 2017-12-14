@extends('layouts.app')
@section('content')

 <div class="container body-form" style="background:white">



  <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Que estas buscando?</div>
                <div class="panel-body">

                    <div class="row">
                            <div class="col-sm-4">
                              <img src="/img/calzaDestacados.jpg" class="img-thumbnail" alt=" " width=300px>
                        			<h3>Embarazo</h3>
                        		</div>

                        		<div class="col-sm-4">
                        			<img src="/img/moratop-02.jpg" class="img-thumbnail" alt=" " width=300px>
                        			<h3>Lactancia</h3>
                        		</div>

                        		<div class="col-sm-4">
                        			<img src="/img/trusaDestacados.jpg" class="img-thumbnail" alt=" " width=300px>
                        			<h3>Post Parto</h3>
                        		</div>
                    </div>
                </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4-offset-2">
      <div class="panel-default">
        <div class="panel-heading">Fecha probable de parto</div>
        <div class="panel-body">
              <form class="form-horizontal" method="GET">
                <div class="form-group">
                  <select name="mes" class="custom-select" >
                     <option value="1">Enero</option>
                     <option value="2">Febrero</option>
                     <option value="3">Marzo</option>
                     <option value="4">Abril</option>
                     <option value="5">Mayo</option>
                     <option value="6">Junio</option>
                     <option value="7">Julio</option>
                     <option value="8">Agosto</option>
                     <option value="9">Septiembre</option>
                     <option value="10">Octubre</option>
                     <option value="11">Noviembre</option>
                     <option value="12">Diciembre</option>
                   </select>
                 <select name="dia" class="custom-select" >
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="7">7</option>
                   <option value="8">8</option>
                   <option value="9">9</option>
                   <option value="10">10</option>
                   <option value="11">11</option>
                   <option value="12">12</option>
                   <option value="13">13</option>
                   <option value="14">14</option>
                   <option value="15">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
                   <option value="19">19</option>
                   <option value="20">20</option>
                   <option value="21">21</option>
                   <option value="22">22</option>
                   <option value="23">23</option>
                   <option value="24">24</option>
                   <option value="25">25</option>
                   <option value="26">26</option>
                   <option value="27">27</option>
                   <option value="28">28</option>
                   <option value="29">29</option>
                   <option value="30">30</option>
                   <option value="31">31</option>
                 </select>
                 <select name="ano" label="ano" class="custom-select">
                   <option value="16">2016</option>
                   <option value="17">2017</option>
                 </select>
               </div>
               <div class="form-group">
                 <button type="submit" name = "calcular" class="btn btn-default">CALCULAR</button>
              </div>
            </form>
          </div>

          <!-- <div class="panel-footer">
              <!-- @if (isset($_GET)){
                  $month = $_GET['mes'];
                  $day = $_GET['dia'];
                  $year = $_GET['ano'];

                  @if ($go === 1){
                   $last = mktime (0,0,0,$month, $day, $year) ;
                   $gest = 24192000;
                   $due = $last + $gest;
                 }

             <p>Tu bebé va a nacer aproximadamente el {{ date("Y-m-d, $due) }}</p>
             }
              @endif
              @else
              <p>Ingrese una fecha</p> -->
          </div> -->
        </div>
      </div>

  <div class="col-md-4">
    <div class="panel-default">
      <div class="panel-heading">Editar cuenta</div>
      <div class="panel-body">
          <form class="" action="/editarController/{{$user->id}}" method="post">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-12">
                  <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Edita tu nombre" required autofocus>
                  @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
              </div>
            </div>
            <div class="form-group">
              <a class="btn btn-link" href="{{ route('password.email') }}">Cambiar su clave?</a>
            </div>
            <div class="form-group">
              <a class="btn btn-link" href="{{ route('logout') }}">Eliminar usuario</a>
            </div>
          </form>
    </div>
    <div class="panel-footer">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Guardar</button>
    </div>

  </div>

  </div>
  </div>



</div

@endsection
