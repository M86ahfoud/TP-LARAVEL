@extends('layouts.base')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading"> Produit</h1>
        <p class="lead text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae,
             veniam, eius aliquam quidem rem sunt nam quaerat facilis ex error placeat ipsa illo sed inventore 
             soluta ipsum cumque atque ea?</p>
    </div>
</section>
<div class="container">
    <div class="row">
        
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                
                <div class="carousel-inner">
                    @foreach ($produits as $produit)
                  <div class="carousel-item active">
                    <img src="{{$produit->image}}" class="d-block w-100" alt="First Slide">
                  </div>
                  @endforeach
                  @foreach ($produits as $produit)
                  <div class="carousel-item">
                    <img src="{{$produit->image}}" class="d-block w-100" alt="Seconde Slide ">
                  </div>
                  @endforeach
                  @foreach ($produits as $produit)
                  <div class="carousel-item">
                    <img src="{{$produit->image}}" class="d-block w-100" alt="Third slide">
                  </div>
                  @endforeach
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
       
    </div>
</div>

@endsection