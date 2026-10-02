<!DOCTYPE html>
<html>
<head><title>Home</title></head>
<body>
    <h1>Home</h1>
    <p>Selamat datang di website saya!</p>

    <h2>Menu Favorit</h2>
    <ul>
        @foreach($makanan as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <a href="/about">About</a> |
    <a href="/contact">Contact</a>
</body>
</html>   