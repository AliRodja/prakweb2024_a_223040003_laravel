<?php 
namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug):array
    {
      
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (! $post) {
            abort(404);
        }
        return $post ;
    }
}

?>