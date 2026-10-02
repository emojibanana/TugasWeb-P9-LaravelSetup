<!DOCTYPE html>
<html>
<head><title>Posts</title></head>
<body>
    <h1>Semua Posts</h1>
    @forelse($posts as $post)
        <div>
            <h2>{{ $post->judul }}</h2>
            <p>{{ $post->isi }}</p>
        </div>
    @empty
        <p>Belum ada post.</p>
    @endforelse
</body>
</html>   