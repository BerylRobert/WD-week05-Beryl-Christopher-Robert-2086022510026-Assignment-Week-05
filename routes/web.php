<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Subianto']);
});

Route::get('/blog', function () {
    $posts = [
        ['judul' => 'Topi VOLBOI: Aksesori atau Kekuatan Super?', 'tag' => 'Fashion', 'isi' => 'Konon, siapa pun yang memakainya otomatis terlihat 40% lebih siap rapat dan 60% lebih siap makan siang.', 'emoji' => '🧢'],
        ['judul' => 'Kenapa Gambarku 404 Padahal Path-nya Sudah Benar?', 'tag' => 'Tutorial', 'isi' => 'Jawabannya: path relatif. Solusinya: pakai asset(). Pelajaran hidup: jangan percaya "img/" tanpa garis miring.', 'emoji' => '🖼️'],
        ['judul' => 'Ctrl+S Itu Bentuk Keimanan', 'tag' => 'Tips Praktikum', 'isi' => 'Yang lupa save sebelum refresh browser, semoga diberi kesabaran dan auto-save.', 'emoji' => '💾'],
        ['judul' => 'Breaking News: Kopi Habis Pas Deadline', 'tag' => 'Berita', 'isi' => 'Situasi masih terkendali. Mahasiswa dilaporkan lanjut ngoding dengan tenaga dalam dan air putih.', 'emoji' => '☕'],
    ];
    return view('blog', compact('posts'));
});

Route::get('/contact', function () {
    return view('contact');
});