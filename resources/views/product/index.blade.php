<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach san pham</title>
</head>
<body>
    <h1>Danh sach san pham</h1>
    <td>
        <a href="{{ route('add') }}">Them san pham</a>
    </td>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Hành động</th>
    </tr>

    <tr>
        <td>1</td>
        <td>Iphone 15 Pro</td>
        <td>28,000,000 đ</td>
        <td><a href="/product/1">Chi tiết</a></td>
    </tr>

    <tr>
        <td>2</td>
        <td>Samsung Galaxy S24</td>
        <td>23,000,000 đ</td>
        <td><a href="/product/2">Chi tiết</a></td>
    </tr>

    <tr>
        <td>3</td>
        <td>Xiaomi 14</td>
        <td>18,000,000 đ</td>
        <td><a href="/product/3">Chi tiết</a></td>
    </tr>
</table>

</body>
</html>