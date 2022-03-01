@extends('layouts.base')


@section('content')

<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    @foreach ($products as $product)
          
        @include('partials.movie')
    @endforeach
</div>

@endsection