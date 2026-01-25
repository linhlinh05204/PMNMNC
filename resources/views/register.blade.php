<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
</head>
<body>
    <h2>Đăng kí</h2>

<form method="POST" action="{{ route('checkRegister') }}">
    @csrf
    <label for="username">Tên đăng nhập:</label>
    <input type="text" name="username" placeholder="Username"><br>
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email"><br>
    <label for="pass">Mật khẩu:</label>
    <input type="password" name="pass" placeholder="Password"><br>
    <label for="confirm_pass">Xác nhận mật khẩu:</label>
    <input type="password" name="confirm_pass" placeholder="Confirm Password"><br>
    <button type="submit">Đăng kí</button>
</form>

@if ($errors->any())
    <p style="color:red">{{ $errors->first() }}</p>
@endif
</body>
</html>