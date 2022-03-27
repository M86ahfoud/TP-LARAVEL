@extends('layouts.admin')


@section('content')

<div class="container-fluid">
    <a href="/admin/produits/creer" class="btn btn-primary mb-5"> Ajouter un produit</a>
    <div class="row">
        @include('layouts.sidebar')
        
        <table class="col table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>
                            <a class="card-img-top">
                                <img src="{{ $produit->image }}" class="img-fluid" alt=" Card image cap", style="width: 60px" >
                            </a>
                        </td>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->prix }}€</td>
                        <td>
                            <div class="row">
                                <a href="/admin/produits/{{ $produit->id }}/modifier" class="col-2 btn btn-success"> Modifier</a>
                                <a href="/produits/{{ $produit->id }}" class="col-2 btn btn-danger"> supprimer</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
        
            </tbody>
        </table>



    </div>
</div>


 
@endsection
