<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="{{ route('product.edit', ['id' => $product->id]) }}" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        <br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{ $product->price }}" required>
        <br>
        <button type="submit">Update Product</button>
</body>
</html>