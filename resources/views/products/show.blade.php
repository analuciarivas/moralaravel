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
            <!-- <div class="tab-pane active" id="pic-1"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></div> -->
            <!-- <div class="tab-pane" id="pic-2"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></div> -->
            <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
            <!-- <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
            <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> -->
          </div>
          <ul class="preview-thumbnail nav nav-tabs">
            <!-- <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></a></li> -->
            <!-- <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></a></li> -->
            <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
            <!-- <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
            <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li> -->
          </ul>

        </div>
        <div class="details col-md-6">
          <h3 class="product-title">{{$products->name}}</h3>
          <div class="rating">
            <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <div class="product__social social">
              <h4>Compartilo con tus amigos</h4>
              <p><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
            </div>
            <span class="review-no">41 reviews</span>
          </div>
          <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
          <h4 class="price">current price: <span>$180</span></h4>
          <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
          <h5 class="sizes">Talles:
            <span class="size" data-toggle="tooltip" title="small">s</span>
            <span class="size" data-toggle="tooltip" title="medium">m</span>
            <span class="size" data-toggle="tooltip" title="large">l</span>
            <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
          </h5>
          <h5 class="colors">colores:
            <span class="color not-available" data-toggle="tooltip" title="Not In store"></span>
            <span class="color black"></span>
            <span class="color white"></span>
          </h5>
          <div class="action">
            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <section class="products-similar">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <h3>Otros productos de lactancia</h3>
          </div>
                        <div class="col-md-3 col-sm-6">
                          <div class="product">
                            <div class="image"><a href="detail.html"><img src="img/product2.jpg" alt="" class="img-responsive"></a>
                              <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal" class="btn btn-default btn-sm">Quick view</a></div>
                            </div>
                            <div class="text">
                              <p class="brand"><a href="#"></a></p>
                              <h3> <a href="detail.html">Fur coat</a></h3>
                              <p class="price">$143</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                          <div class="product">
                            <div class="image"><a href="detail.html"><img src="img/product3.jpg" alt="" class="img-responsive"></a>
                              <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal" class="btn btn-default btn-sm">Quick view</a></div>
                            </div>
                            <div class="text">
                              <p class="brand"><a href="#"></a></p>
                              <h3> <a href="detail.html">Fur coat</a></h3>
                              <p class="price">$113</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                          <div class="product">
                            <div class="image"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-responsive"></a>
                              <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal" class="btn btn-default btn-sm">Quick view</a></div>
                            </div>
                            <div class="text">
                              <p class="brand"><a href="#"></a></p>
                              <h3> <a href="detail.html">Fur coat</a></h3>
                              <p class="price">$121</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>


<div class="card">
  <div class="container-fliud">
    <div class="wrapper row">
      <div class="preview col-md-6">

        <div class="preview-pic tab-content">
          <div class="tab-pane active" id="pic-1"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></div>
          <div class="tab-pane" id="pic-2"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></div>
          <!-- <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/22" /></div> -->
          <!-- <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
          <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> -->
        </div>
        <ul class="preview-thumbnail nav nav-tabs">
          <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></a></li>
          <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""></a></li>
          <!-- <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li> -->
          <!-- <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
          <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li> -->
        </ul>

      </div>
      <div class="details col-md-6">
        <h3 class="product-title">{{$products->name}}</h3>
        <div class="rating">
          <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class="product__social social">
            <h4>Compartilo con tus amigos</h4>
            <p><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
          </div>
          <span class="review-no">41 reviews</span>
        </div>
        <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
        <h4 class="price">current price: <span>$180</span></h4>
        <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
        <h5 class="sizes">Talles:
          <span class="size" data-toggle="tooltip" title="small">s</span>
          <span class="size" data-toggle="tooltip" title="medium">m</span>
          <span class="size" data-toggle="tooltip" title="large">l</span>
          <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
        </h5>
        <h5 class="colors">colores:
          <span class="color not-available" data-toggle="tooltip" title="Not In store"></span>
          <span class="color black"></span>
          <span class="color white"></span>
        </h5>
        <div class="action">
          <button class="add-to-cart btn btn-default" type="button">add to cart</button>
          <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-10 col-sm-offset-1">
    <section class="products-similar">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h3>Otros productos de lactancia</h3>
        </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="product">
                          <div class="image"><a href="detail.html"><img src="img/product2.jpg" alt="" class="img-responsive"></a>
                            <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal" class="btn btn-default btn-sm">Quick view</a></div>
                          </div>
                          <div class="text">
                            <p class="brand"><a href="#"></a></p>
                            <h3> <a href="detail.html">Fur coat</a></h3>
                            <p class="price">$143</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                        <div class="product">
                          <div class="image"><a href="detail.html"><img src="img/product3.jpg" alt="" class="img-responsive"></a>
                            <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal" class="btn btn-default btn-sm">Quick view</a></div>
                          </div>
                          <div class="text">
                            <p class="brand"><a href="#"></a></p>
                            <h3> <a href="detail.html">Fur coat</a></h3>
                            <p class="price">$113</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                        <div class="product">
                          <div class="image"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-responsive"></a>
                            <div class="quick-view-button"><a href="#" data-toggle="modal" data-target="#product-quick-view-modal" class="btn btn-default btn-sm">Quick view</a></div>
                          </div>
                          <div class="text">
                            <p class="brand"><a href="#"></a></p>
                            <h3> <a href="detail.html">Fur coat</a></h3>
                            <p class="price">$121</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>


          <h1>{{$products->name}}</h1>
<<<<<<< HEAD
          <img src="{{ asset('storage/' . $products->fotoPath) }}" alt="">
=======
          {{-- <img src="{{ asset('storage/' . $products->fotoPath) }}" alt=""> --}}
>>>>>>> 8afb1803e601ce9712d08311579038df31f60e9d
          <form action="/products/{{$products->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
          </form>

            <div class="col-lg-9">
              <div class="card mt-4">
                <img class="card-img-top img-fluid" src="/storage/{{$products->fotoPath}}" alt="">
                <div class="card-body">
                  <h3 class="card-title">{{$products->name}}</h3>
                  <h4>${{$products->getPrice()}}</h4>

                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.. </p>

                  <div class="filter-container">
                  <h4>Talle</h4>
                  <select name="talle" class="size-filter p-half-all-xs" onclick="LS.urlAddParam('Talle', '85');">
                     @foreach ($talles as $key => $talle)
                    <option value="{{$talle->id}}">{{$talle->talle}}</option>
                    @endforeach
                  </select>
                </div>

                  <div class="filter-container">
                  <h4>Color</h4>
                 <select name="Color" class="other-filter p-half-all-xs" onclick="LS.urlAddParam('Color Primario', 'Blanco');">
                  @foreach ($colors as $color)
                    <option value="{{$color->id}}">{{$color->color}}</option>
                  @endforeach
                 </select>
                </div>
              </div>
            </div>
              <!-- /.card -->

              <div class="card card-outline-secondary my-4">
                <div class="card-header">

                </div>

              </div>
              <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

          </div>
        {{-- </ul>
          <img src="{{ asset('storage/' . $products->fotoPath) }}" alt="">
          <a href="/editarProducts/{{$products->id}}">
            <button type="button" name="button">Editar</button>
          </a>
          <a href="/eliminarProducts/{{$products->id}}">
            <button type="button" name="button">Eliminar</button>
          </a> --}}
        </div>
        <!-- /.container -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


      </body>

    </html>

@endsection
