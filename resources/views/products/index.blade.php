@extends('layouts.app')
@section('content')

<!-- PAGINA DE TODOS LOS PRODUCTOS  -->

 <!-- Page Content -->
 <div class="container">
   <div class="row">
     <div class="col-lg-3">
       <h1 class="my-4">Maternity</h1>
       <h3 class="list-group">
         <a href="/producto" class="list-group-item">Embarazo</a>
         <a href="/producto" class="list-group-item">Post Parto </a>
         <a href="/producto" class="list-group-item">Lactancia</a>
       </h3>
     </div>
     <!-- /.col-lg-3 -->

     <div class="col-lg-9">
       <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
         <ol class="carousel-indicators" color="black" >
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
           <div class="carousel-item active" >
             <img class="d-block img-fluid" src="img/postparto.jpg"  width="900" height="350" alt="First slide">
           </div>
           <div class="carousel-item">
             <img class="d-block img-fluid" src="img/trusa.jpg" width="900" height="350" alt="Second slide">
           </div>
           <div class="carousel-item">
             <img class="d-block img-fluid" src="img/trusa.jpg" width="900" height="350"  alt="Third slide">
             <!-- http://placehold.it/900x350-->
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
        </div>
  </div>
       <div class="row">
<div class ="col-lg-12">
         @foreach ($products as $product)
             <div class="col-lg-4 col-md-6 mb-4">
               <div class="card h-100">
                 <a href="/producto/{{$product->id}}"><img class="card-img-top" src="/storage/{{$product->fotoPath}}" alt=""></a>
                  <div class="card-body">
                    <h3 class="card-title"><a href="/producto/{{$product->id}}">{{$product->name}}</a></h3>
                    <h5>${{$product->getPrice()}}</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                 </div>
                <!-- <div class="card-footer">
                </div> -->
              </div>
          </div>
        @endforeach
       </div>
       <!-- /.row -->

   </div>

   </div>
@endsection
