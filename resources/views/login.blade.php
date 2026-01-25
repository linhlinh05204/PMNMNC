<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
</head>
<body>
    <h1>Dang nhap</h1>
    <form action="{{ route('checkLogin') }}" method="POST">
        @csrf
        <label for="username">Ten dang nhap:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="pass">Mat khau:</label>
        <input type="password" id="pass" name="password" required>
        <br>
        <button type="submit">Dang nhap</button>
    </form>
</body>
</html>