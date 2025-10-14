<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Author</title>
</head>
<body>

    <h1>Daftar Author</h1>
    <p>Berikut Penulis buku buku</p>
    
        @foreach($authors as $author)
        <ul>
            <li>{{ $author['id'] }}</li> 
            <li>{{ $author['name'] }}</li>
        </ul>
        @endforeach
    
    
</body>
</html>