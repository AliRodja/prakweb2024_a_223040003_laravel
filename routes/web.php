<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Ali Imran Rodja',
        'title' => 'About'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1', 
                'title' => 'Judul Artikel 1',
                'author' => 'Ali Imran Rodja',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae omnis dolores est? Consequatur ipsa architecto quia amet quae, consequuntur, mollitia obcaecati voluptate distinctio dolore quaerat? Maxime totam deleniti adipisci dolorum?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2', 
                'title' => 'Judul Artikel 2',
                'author' => 'Ali Imran Rodja',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ducimus ex nisi illum culpa suscipit, dignissimos esse ab tempore rem iure recusandae magni itaque ipsum eos nam at, aperiam cumque, sapiente commodi vitae quae fugit harum. Praesentium ex reprehenderit error optio impedit, vero at harum dignissimos quos voluptate quibusdam! Rerum, cum fugiat blanditiis pariatur excepturi nulla! Magni nostrum beatae quaerat delectus cum dolorem omnis facere in doloribus maxime, nobis hic quidem, possimus enim voluptatem natus et aperiam nisi quae. Quidem similique veritatis aspernatur? In blanditiis dolore non minima natus, magnam expedita ea labore, ab eveniet, mollitia consequatur quasi voluptates dicta.'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1', 
                'title' => 'Judul Artikel 1',
                'author' => 'Ali Imran Rodja',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae omnis dolores est? Consequatur ipsa architecto quia amet quae, consequuntur, mollitia obcaecati voluptate distinctio dolore quaerat? Maxime totam deleniti adipisci dolorum?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2', 
                'title' => 'Judul Artikel 2',
                'author' => 'Ali Imran Rodja',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ducimus ex nisi illum culpa suscipit, dignissimos esse ab tempore rem iure recusandae magni itaque ipsum eos nam at, aperiam cumque, sapiente commodi vitae quae fugit harum. Praesentium ex reprehenderit error optio impedit, vero at harum dignissimos quos voluptate quibusdam! Rerum, cum fugiat blanditiis pariatur excepturi nulla! Magni nostrum beatae quaerat delectus cum dolorem omnis facere in doloribus maxime, nobis hic quidem, possimus enim voluptatem natus et aperiam nisi quae. Quidem similique veritatis aspernatur? In blanditiis dolore non minima natus, magnam expedita ea labore, ab eveniet, mollitia consequatur quasi voluptates dicta.'
            ]
        ];

        $post = Arr::first($posts, function($post) use ($slug){
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
