<!DOCTYPE html>
<html>
<head><title>About</title></head>
<body>
    <h1>About</h1>
    <p>Halo, saya {{ $nama }}. Saya belajar Laravel.</p>

    <h2>Skills</h2>
    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>

    <a href="/">Home</a> |
    <a href="/contact">Contact</a>
</body>
</html>   