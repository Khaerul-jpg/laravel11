<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhamad Khaerul Rafli', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Khaerul Rafli',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam aperiam dolor
            optio ratione temporibus! Impedit incidunt aliquam adipisci praesentium, vel tempora assumenda similique reprehenderit sequi iste
            aspernatur eius consectetur est.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Khaerul Rafli',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit eius quis adipisci
            veniam consequatur, atque saepe, amet tempore enim ex explicabo? Delectus rerum alias obcaecati, quam neque
            doloremque fugit. Provident?'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
