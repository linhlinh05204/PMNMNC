<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Ten san pham:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        <br>
        <label for="description">Mo ta:</label>
        <input type="text" id="description" name="description" value="{{ $product->description }}">
        <br>
        <label for="price">Gia:</label>
        <input type="number" id="price" name="price" value="{{ $product->price }}" required>
        <br>
        <label for="stock">So luong ton kho:</label>
        <input type="number" id="stock" name="stock" value="{{ $product->stock }}" required>
        <br>
        <button type="submit">Update Product</button>
</body>
</html>