<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Akbar",
            "post" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem officiis cum facere eos provident ipsa odit quia deleniti sapiente quisquam soluta reiciendis doloremque cumque nam minus vero, possimus repellat ipsum iste? Consequatur vitae fugiat officiis! Distinctio, maiores architecto similique accusantium vel rem? Culpa labore minus iusto neque quae reiciendis temporibus perferendis pariatur nostrum minima velit itaque distinctio est molestias, atque eaque nulla expedita reprehenderit suscipit qui dignissimos accusantium sunt iure mollitia. Tenetur quasi mollitia ab doloremque, incidunt dignissimos suscipit aut?"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Budi",
            "post" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem officiis cum facere eos provident ipsa odit quia deleniti sapiente quisquam soluta reiciendis doloremque cumque nam minus vero, possimus repellat ipsum iste? Consequatur vitae fugiat officiis! Distinctio, maiores architecto similique accusantium vel rem? Culpa labore minus iusto neque quae reiciendis temporibus perferendis pariatur nostrum minima velit itaque distinctio est molestias, atque eaque nulla expedita reprehenderit suscipit qui dignissimos accusantium sunt iure mollitia. Tenetur quasi mollitia ab doloremque, incidunt dignissimos suscipit aut?"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}