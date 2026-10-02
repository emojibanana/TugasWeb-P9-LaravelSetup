<?php

namespace App\Http\Controllers;
use App\Models\Post;

class CustomController extends Controller
{
    public function home()
    {
        $makanan = ['Nasi Goreng', 'Mie Ayam', 'Sate', 'Gado-Gado'];
        return view('home', compact('makanan'));
    }

    public function about()
    {
        $nama = 'Banna';
        $skills = ['Laravel', 'Blade', 'MySQL', 'HTML/CSS'];
        return view('about', compact('nama', 'skills'));
    }

    public function contact()
    {
        $kontak = [
            'Email'    => 'ahmad@email.com',
            'Telepon'  => '081234567890',
            'Alamat'   => 'Medan, Indonesia',
        ];
        return view('contact', compact('kontak'));
    }

    public function posts()
    {
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }

    public function hello($nama)
    {
        return view('hello', compact('nama'));
    }
}
