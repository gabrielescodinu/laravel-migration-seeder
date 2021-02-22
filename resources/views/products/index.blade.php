<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>All Products</h1>

<a href="/" class="btn btn-warning">Add a new Game</a>

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
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    
</body>
</html>