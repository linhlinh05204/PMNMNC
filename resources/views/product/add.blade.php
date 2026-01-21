<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them san pham</title>
</head>
<body>
    <h1>Them san pham</h1>
    <form action="{{ route('add') }}" method="POST">
        @csrf
        <label for="name">Ten san pham:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="price">Gia:</label>
        <input type="number" id="price" name="price" required>
        <br>
        <button type="submit">Them</button>
</body>
</html>