@extends('layouts.productapp')
@section('content')

	<div class="container">

    <div class="nav.breadcrumb">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Lactancia</a></li>
            <li>{{$products->name}}</li>
          </ul>
        </div>
      </div>
    </div>


		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{ asset('storage/' . $productS->fotopath) }}" alt=""></div>
						  <div class="tab-pane" id="pic-2"><img src="{{ asset('storage/' . $productS->fotopath) }}" alt=""></div>
						  <!-- <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div> -->
						  <!-- <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> -->
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('storage/' . $productS->fotopath) }}" alt=""></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('storage/' . $productS->fotopath) }}" alt=""></a></li>
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

<!--
    <div class="nav.breadcrumb">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="category.html">Lactancia</a></li>
            <li>Corpiño de amamantar</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row page-top">
          <div class="col-sm-6 col-sm-offset-3">
            <h1 class="product__heading">Corpiño de amamantar</h1>
            <p class="text-muted">Tirantes elásticos, graduables y anchos. Varias posiciones de enganche, para adaptarse a tus cambios. Una copa reforzada para sujetar el pecho, pero sin costuras que puedan rozar el seno o el pezón, ni elementos rígidos que dejen marcas. Cierres en formato "snap" en los breteles que te dejan hacerlo desaparecer a la hora de amamantar.</p>
          </div>
    </div>


      <div class="row">
        <div class="col-md-12">
          <div class="row product__main">
            <div class="col-sm-5 col-sm-offset-1">
              <div class="mainImage"><img src="img/detailbig1.jpg" alt="" class="img-responsive">
              </div>
          <div class="ribbon sale">
                <div class="theribbon">SALE</div>
                <div class="ribbon-background"></div>
              </div>
              <div class="ribbon new">
                <div class="theribbon">NEW</div>
                <div class="ribbon-background"></div>
              </div>
              <div class="row product__thumbs">
                <div class="col-xs-4"><a href="img/detailbig1.jpg" class="thumb"><img src="img/detailsmall1.jpg" alt="" class="img-responsive"></a></div>
                <div class="col-xs-4"><a href="img/detailbig2.jpg" class="thumb"><img src="img/detailsmall2.jpg" alt="" class="img-responsive"></a></div>
                <div class="col-xs-4"><a href="img/detailbig3.jpg" class="thumb"><img src="img/detailsmall3.jpg" alt="" class="img-responsive"></a></div>
              </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
              <form class "form-horizontal">
                <p class="price">$124.00</p>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                      <label for="size">Choose your size</label>
                      <select id="size" class="form-control">
                        <option>1-2</option>
                        <option>3-4</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="quantity">Cantidad</label>
                      <input type="number" value="1" id="quantity" class="form-control">
                    </div>
                  </div>
                </div>
                <p class="text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>&nbsp;Add to cart</button>
                  <button type="submit" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default"><i class="fa fa-heart-o"></i></button>
                </p>
              </form>
              <div class="product__details">
                <h4>Detalles del producto</h4>
                <p>tktktkt</p>
                <h4>Cuidado</h4>
                <ul>
                  <li>Polyester</li>
                  <li>Machine wash</li>
                </ul>
                <h4>Talle</h4>
                <ul>
                  <li>tktktkt </li>
                </ul>
              </div>
              <div class="product__social social">
                <h4>Compartilo con tus amigos</h4>
                <p><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <section class="products-similar">
                <div class="row">
                  <div class="col-md-3 col-sm-6">
                    <h3>You may also like these products</h3>
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
                  </section>
                </div> -->
@endsection
