<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ban Co</title>
</head>
<body>
    <h1>Bàn cờ vua {{ $n }}x{{ $n }}</h1>
    
    <table border="1" cellpadding="5" cellspacing="0">
        @for ($i = 0; $i < $n; $i++)
            <tr>
                @for ($j = 0; $j < $n; $j++)
                    <td style="width: 30px; height: 30px; background-color: {{ (($i + $j) % 2 == 0) ? '#fff' : '#000' }};"></td>
                @endfor
            </tr>
        @endfor
    </table>
</body>
</html>