@extends('layouts.app')

@section('content')
<h1>All Products</h1>

<a href="/">Back Home</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection