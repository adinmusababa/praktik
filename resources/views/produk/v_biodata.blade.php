<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing data dengan array</title>
</head>
<body>
    <p>Nama : {{$nama}}</p>
    <p>Makanan Kesukaan</p>
    <ul>
        @foreach($makanan as $m)
            <li>{{ $m }}</li>
        @endforeach
    </ul>
</body>
</html>
