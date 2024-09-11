<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'I Made Surya Adi Palguna',
        //     'username' => 'suryaadipalguna',
        //     'email' => 'suryaadipalguna@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('12345678'),
        //     'is_admin' => true
        // ]);
        // User::create([
        //     'name' => 'Ananda Putra',
        //     'username' => 'anandaputra',
        //     'email' => 'anandaputra@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('12345678'),
        //     'is_admin' => true
        // ]);

        // User::factory(10)->create();

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming',
        //     'image' => 'category-images/web-programming.jpg'
        // ]);
        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        //     'image' => 'category-images/web-design.jpg'
        // ]);
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        //     'image' => 'category-images/personal.jpg'
        // ]);

        // Post::factory(50)->create();

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio voluptate quos sit architecto quod in natus nam accusamus at. Consequuntur eius voluptas deleniti ex magni quidem sunt beatae, dolor accusamus sequi vitae obcaecati atque officiis delectus illo maxime sint quam laborum tenetur ratione nesciunt. Accusantium doloribus possimus fuga minus aut, pariatur dolor. Ea maxime eos quia quo nesciunt! Quos sunt, qui amet magnam debitis quo in beatae, ad facere incidunt a reprehenderit repudiandae odit tenetur blanditiis maiores magni alias ex. Facere, rem accusantium. A dolor aspernatur nemo sapiente. Deserunt numquam beatae iusto hic, rerum delectus odit officia dicta! Est?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio voluptate quos sit architecto quod in natus nam accusamus at. Consequuntur eius voluptas deleniti ex magni quidem sunt beatae, dolor accusamus sequi vitae obcaecati atque officiis delectus illo maxime sint quam laborum tenetur ratione nesciunt. Accusantium doloribus possimus fuga minus aut, pariatur dolor. Ea maxime eos quia quo nesciunt! Quos sunt, qui amet magnam debitis quo in beatae, ad facere incidunt a reprehenderit repudiandae odit tenetur blanditiis maiores magni alias ex. Facere, rem accusantium. A dolor aspernatur nemo sapiente. Deserunt numquam beatae iusto hic, rerum delectus odit officia dicta! Est?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio voluptate quos sit architecto quod in natus nam accusamus at. Consequuntur eius voluptas deleniti ex magni quidem sunt beatae, dolor accusamus sequi vitae obcaecati atque officiis delectus illo maxime sint quam laborum tenetur ratione nesciunt. Accusantium doloribus possimus fuga minus aut, pariatur dolor. Ea maxime eos quia quo nesciunt! Quos sunt, qui amet magnam debitis quo in beatae, ad facere incidunt a reprehenderit repudiandae odit tenetur blanditiis maiores magni alias ex. Facere, rem accusantium. A dolor aspernatur nemo sapiente. Deserunt numquam beatae iusto hic, rerum delectus odit officia dicta! Est?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio voluptate quos sit architecto quod in natus nam accusamus at. Consequuntur eius voluptas deleniti ex magni quidem sunt beatae, dolor accusamus sequi vitae obcaecati atque officiis delectus illo maxime sint quam laborum tenetur ratione nesciunt. Accusantium doloribus possimus fuga minus aut, pariatur dolor. Ea maxime eos quia quo nesciunt! Quos sunt, qui amet magnam debitis quo in beatae, ad facere incidunt a reprehenderit repudiandae odit tenetur blanditiis maiores magni alias ex. Facere, rem accusantium. A dolor aspernatur nemo sapiente. Deserunt numquam beatae iusto hic, rerum delectus odit officia dicta! Est?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
