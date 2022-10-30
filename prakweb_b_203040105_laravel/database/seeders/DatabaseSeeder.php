<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        // 'name' => 'Rafliansyah',
        // 'email' => 'rafliansyah11@gmail.com',
        // 'password' => bcrypt("12345")
        // ]);

        // User::create([
        // 'name' => 'Raihan har',
        // 'email' => 'raihannhar@gmail.com',
        // 'password' => bcrypt("12345")
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);   
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
       
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul pertama',
        //     'excerpt' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur.',
        //     'body' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur, velit numquam dignissimos placeat aperiam repellendus explicabo. Ipsam, quisquam sit magni dolor ab nobis repellendus repellat non, distinctio itaque illo suscipit labore quam voluptas? Possimus et cupiditate sit optio consectetur. Molestiae minima et velit eum labore! Veniam nihil obcaecati velit illo odio reiciendis dolores pariatur quo laudantium recusandae inventore architecto vero aliquid expedita, autem cumque sint ea fugiat porro molestiae perferendis dolorem exercitationem dignissimos.',
        //     'category_id' => 1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur.',
        //     'body' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur, velit numquam dignissimos placeat aperiam repellendus explicabo. Ipsam, quisquam sit magni dolor ab nobis repellendus repellat non, distinctio itaque illo suscipit labore quam voluptas? Possimus et cupiditate sit optio consectetur. Molestiae minima et velit eum labore! Veniam nihil obcaecati velit illo odio reiciendis dolores pariatur quo laudantium recusandae inventore architecto vero aliquid expedita, autem cumque sint ea fugiat porro molestiae perferendis dolorem exercitationem dignissimos.',
        //     'category_id' => 1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur.',
        //     'body' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur, velit numquam dignissimos placeat aperiam repellendus explicabo. Ipsam, quisquam sit magni dolor ab nobis repellendus repellat non, distinctio itaque illo suscipit labore quam voluptas? Possimus et cupiditate sit optio consectetur. Molestiae minima et velit eum labore! Veniam nihil obcaecati velit illo odio reiciendis dolores pariatur quo laudantium recusandae inventore architecto vero aliquid expedita, autem cumque sint ea fugiat porro molestiae perferendis dolorem exercitationem dignissimos.',
        //     'category_id' => 2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> <p>Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!</p><p>Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
        // \App\Models\User::factory()->create([
        
    }
}
