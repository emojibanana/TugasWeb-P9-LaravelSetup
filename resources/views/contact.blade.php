<!DOCTYPE html>
<html>
<head><title>Contact</title></head>
<body>
    <h1>Contact</h1>

    <table>
        @foreach($kontak as $label => $nilai)
            <tr>
                <td><strong>{{ $label }}</strong></td>
                <td>{{ $nilai }}</td>
            </tr>
        @endforeach
    </table>

    <a href="/">Home</a> |
    <a href="/about">About</a>
</body>
</html>   