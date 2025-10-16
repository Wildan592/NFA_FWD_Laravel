<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        @foreach ($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> — {{ $book->genre }}
                <br>Harga: Rp{{ number_format($book->price, 0, ',', '.') }}
            </li>
        @endforeach
    </ul>

</body>
</html>
