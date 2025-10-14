<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres Book</title>
</head>
<body>
    <h1>Daftar Genre Buku</h1>
    <p>Silahkan Memilih Sesuai keinginanmu</p>
   
        @foreach($genres as $item) 
        <ul>
            <li>{{$item['id'] }}</li>
            <li>{{$item['name'] }}</li>
            <li>{{$item['books'] }}</li>
        </ul>
        @endforeach
    
</body>
</html>