@extends('layouts.base')

@section('content')
<section class="jumbotron text-center">
<div class="container">
    <h1 class="jumbotron-heading">
        contact
    </h1>
    <p class="lead text-muted mb-0">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Natus commodi laboriosam nisi possimus nesciunt veritatis a praesentium voluptatibus, 
        sunt cumque ad fuga accusantium totam corrupti cupiditate in libero fugit! Quidem?
    </p>
</div>
</section>
<div class="container">
    <div class="row">
<div class="col">
    <nav aria-label="breadcrumb" >

    </nav>
</div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <i class="fa fa-envelope">
                           
                        </i>
                       Contactez nous 
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Votre nom">
                            </div>
                            <div class="mb-3">
                                <label for="email">Nom</label>
                                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Votre Email">
                                <small id="emailHelp" class="form-text text-muted">Nous ne partageons pas votre email.</small>
                            </div>
                            <div class="mb-3">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="6"></textarea>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary text-right">Envoyer</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase">
                        <i class="fa fa-home">

                        </i>
                        Adresse
                    </div>
                    <div class="card-body">
                        <p>{{ config('services.Adresse.rue') }}</p>
                        <p>{{ config('services.Adresse.postacode') }} {{ config('services.Adresse.city') }}</p>
                        <p>{{ config('services.Adresse.country') }}</p>
                        <p> Email :{{ config('services.contact.mail') }}</p>
                        <p>Tel :{{ config('services.contact.phone') }}</p>

                            
                    </div>
                </div>

            </div>
        </div>
        </div>    

    
@endsection
