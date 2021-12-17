<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Category::create(
            [
                'name' => 'web programing',
                'slug' => 'web-programing'
            ]
        );
        Category::create(
            [
                'name' => 'personal',
                'slug' => 'personal'
            ]
        );
        post::factory(20)->create();

        // User::create(
        //     [
        //         'name'     => 'tedy',
        //         'email'    => 'tedy@gmail.com',
        //         'password' => bcrypt('1234')
        //     ]
        // );
        // User::create(
        //     [
        //         'name'     => 'trisna',
        //         'email'    => 'trisna@gmail.com',
        //         'password' => bcrypt('1234')
        //     ]
        // );

        // Post::create(
        //     [
        //         'title'       => 'judul pertama',
        //         'slug'        => 'judul-pertama',
        //         'excerpt'     => 'lorem pertama',
        //         'body'        => 'lorem ipsum pertama',
        //         'category_id' => 1,
        //         'user_id'     => 1
        //     ]
        // );
        // Post::create(
        //     [
        //         'title'       => 'judul kedua',
        //         'slug'        => 'judul-kedua',
        //         'excerpt'     => 'lorem kedua',
        //         'body'        => 'lorem ipsum kedua',
        //         'category_id' => 2,
        //         'user_id'     => 1
        //     ]
        // );
        // Post::create(
        //     [
        //         'title'       => 'judul trisna',
        //         'slug'        => 'judul-trisna',
        //         'excerpt'     => 'lorem trisna',
        //         'body'        => 'lorem ipsum trisna',
        //         'category_id' => 2,
        //         'user_id'     => 2
        //     ]
        // );
    }
}
