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
        // \App\Models\User::factory(10)->create();
        User::create(
            [
                'name'     => 'tedy',
                'email'    => 'tedy@gmail.com',
                'password' => bcrypt('1234')
            ]
        );
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
        Post::create(
            [
                'title'       => 'judul pertama',
                'slug'        => 'judul-pertama',
                'excerpt'     => 'lorem pertama',
                'body'        => 'lorem ipsum pertama',
                'category_id' => 1,
                'user_id'     => 1
            ]
        );
        Post::create(
            [
                'title'       => 'judul kedua',
                'slug'        => 'judul-kedua',
                'excerpt'     => 'lorem kedua',
                'body'        => 'lorem ipsum kedua',
                'category_id' => 2,
                'user_id'     => 1
            ]
        );
    }
}
