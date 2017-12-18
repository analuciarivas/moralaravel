@extends('layouts.app')
@section('content')

<div class="container-fluid">
<div class="row">
  <div class="nav.breadcrumb">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Lactancia</a></li>
          <li><a href=""> {{$products->name}}</a></li>
        </ul>
      </div>
  </div>
</div>

<div class="card">
    <div class="wrapper row">
      <div class="preview col-md-6">

          <div class="preview-pic tab-content">
            <div class="tab-pane active" id="pic-1"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></div>
            <div class="tab-pane" id="pic-2"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></div>
            <div class="tab-pane" id="pic-3"><img src="http://via.placeholder.com/400x252" alt=""/></div> <!--http://placekitten.com/400/252-->
          </div>
          <ul class="preview-thumbnail nav nav-tabs">
            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></a></li>
            <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></a></li>
            <li><a data-target="#pic-3" data-toggle="tab"><img src="http://via.placeholder.com/200x126" /></a></li>
          </ul>
        </div>

        <div class="details col-md-6">
          <h3 class="product-title">{{$products->name}}</h3>
          <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
          <h4 class="price">Precio: <span>${{$products->getPrice()}}</span></h4>
        <h4 class="sizes">Talles:
            @foreach ($talles as $key => $talle)
           <span class="size" data-toggle="tooltip" value="{{$talle->id}}">{{$talle->talle}}</span>
           @endforeach
           <select name="talle" onclick="LS.urlAddParam('Talle', '85');">
              @foreach ($talles as $key => $talle)
             <span class="size"><option value="{{$talle->id}}">{{$talle->talle}}</option></span>
             @endforeach
          </select>
        </h4>

        <h4 class="sizes">colores:
          @foreach ($colors as $color)
          <span><i class="fa fa-square" aria-hidden="true" style="color:{{$color->color}}"></i>
          @endforeach
            <select name="color"  onclick="LS.urlAddParam('Color Primario', 'Blanco');">
            @foreach ($colors as $color)
              <option value="{{$color->id}}">{{$color->color}}</option>
            @endforeach
          </select>
        </h4>
        <!-- pregunta: quiero cambiar en la base de datos para que se vea el color, que el color se pueda mostrar -->
        <div class="product__social social">
          <h5>Compartilo:
          <a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i> </a>
          <a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-twitter"></i> </a>
          <a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-instagram"></i> </a>

        </h5>

      </div>
      <div class="action">
        <p></p>
        <button class="add-to-cart btn btn-default" type="button">COMPRAR</button>
        <button class="like btn btn-default" type="button"><span class="fa fa-facebook"></span></button>
        <button class="like btn btn-default" type="button"><span class="fa fa-instagram"></span></button>
        <button class="like btn btn-default" type="button"><span class="fa fa-twitter"></span></button>
      </div>
    </div>

        </div>
      </div>

    </div>



                    <!-- @if (Auth::user()->name == "admin")
                      <form action="/products/{{$products->id}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                          <a href="/editarProducts/{{$products->id}}">
                            <button type="button" name="button">Editar</button>
                          </a>
                          <a href="/eliminarProducts/{{$products->id}}">
                            <button type="button" name="button">Eliminar</button>
                          </a>
                      </form>
                    @endif -->

@endsection
