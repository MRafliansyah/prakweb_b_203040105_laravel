<?php

namespace App\Models;


class Post extends Model
{
   private static $blog_posts = [
    [
        "title" => "judul post pertama" , 
        "slug" => "judul-post-pertama",
        "author" => "Rafliansyah",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea blanditiis eaque quisquam, rem accusamus, excepturi placeat iusto omnis molestiae eius maxime ducimus exercitationem nisi sed quod consequuntur aut provident doloribus odit. Corporis explicabo libero deleniti animi in ab, quidem dignissimos quos cupiditate velit rem consequatur, accusantium delectus? Enim inventore tempora officiis. Esse sit pariatur ab numquam harum excepturi repudiandae quo doloribus quaerat est. Iusto iure quam dicta officiis nemo fugiat tempora eveniet ea consequatur, distinctio magni laudantium sit explicabo veritatis?"
    ],
    [
        "title" => "judul post kedua" ,
        "slug" => "judul-post-kedua", 
        "author" => "farhan",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea blanditiis eaque quisquam, rem accusamus, excepturi placeat iusto omnis molestiae eius maxime ducimus exercitationem nisi sed quod consequuntur aut provident doloribus odit. Corporis explicabo libero deleniti animi in ab, quidem dignissimos quos cupiditate velit rem consequatur, accusantium delectus? Enim inventore tempora officiis. Esse sit pariatur ab numquam harum excepturi repudiandae quo doloribus quaerat est. Iusto iure quam dicta officiis nemo fugiat tempora eveniet ea consequatur, distinctio magni laudantium sit explicabo veritatis?"
    ]
];

public static function all()
{
    return self::$blog_posts;
}
}
