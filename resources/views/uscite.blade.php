@extends('layouts.app')

@section('content')
<h1>All Products</h1>

<a href="/">Back Home</a>


    @foreach ($prodotti as $prodotto)

    @endforeach

@endsection