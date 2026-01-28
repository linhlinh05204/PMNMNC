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
    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" placeholder="Password"><br>
    <label for="repass">Xác nhận mật khẩu:</label>
    <input type="password" name="repass" placeholder="Confirm Password"><br>
    <label for="mssv">MSSV:</label>
    <input type="text" name="mssv" placeholder="MSSV"><
    <label for="lopmonhoc">Lớp môn học:</label>
    <input type="text" name="lopmonhoc" placeholder="Lớp môn học"><br>
    <label for="gioitinh">Giới tính:</label>
    <select name="gioitinh">
        <option value="Nam">Nam</option>
        <option value="Nu">Nữ</option>
    </select><br>
    <button type="submit">Đăng kí</button>
</form>

@if ($errors->any())
    <p style="color:red">{{ $errors->first() }}</p>
@endif
</body>
</html>