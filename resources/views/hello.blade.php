<!DOCTYPE html>
<html>
<head><title>Halo {{ $nama }}</title></head>
<body>
    <h1>Halo, {{ $nama }}!</h1>
    <p>Selamat belajar Laravel!</p>
    <p>Route parameter berhasil: /hello/{{ $nama }}</p>
    
    <hr>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/contact">Contact</a> |
    <a href="/posts">Posts</a>
</body>
</html>
