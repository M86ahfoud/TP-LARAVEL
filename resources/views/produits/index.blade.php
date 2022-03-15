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
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-list">

                    </i>

                </div>
                <ul class="list-group category_block">
                    @foreach ($categories as $category)
                        <li class="list-group-item">
                            <a href="/categorie/{{ $category->id }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
    
                </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">
                   
                    Dernier produit
                </div>
    
                <img class="img-fluid border-0" src="{{ $lastproduits->image }}" alt="Card image cap">
                <div class="card-body">
    
                    <h4 class="card-title text-center">
                        <a href="product.html" title="View Product">{{ $lastproduits->nom }}</a>
                    </h4>
    
                    <p class="card-text"> {{ $lastproduits->description }}</p>
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-danger w-100">{{ $lastproduits->prix }}</p>
                        </div>
                        <div class="col">
                            <a href='/produits/{product}-iphone-xs/' class="btn btn-success w-100">Voir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">

                @foreach ($produits as $produit)
                    <div class="card">
                        <a class="card-img-top">
                            <img src="{{ $produit->image }}" class="img-fluid" alt=" Card image cap">
                        </a>
                        <h5 class="card-title"><a class="card-titl" href="produit.html"> {{ $produit->nom }} </a>
                        </h5>
                        <p class="card-text"> {{ $produit->description }} </p>
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-danger w-100" href="#">{{ $produit->prix }}</a>
                            </div>
                            <div class="col">
                                <a href="/produits/{{ $produit->id }}" class="btn btn-success w-100"> Ajouter</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    {!! $produits->links() !!}
@endsection
