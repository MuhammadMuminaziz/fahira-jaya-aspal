<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ahmad wahyudi',
            'email' => 'ahmadwahyudi1993@gmail.com',
            'password' => Hash::make('jgnlupa123')
        ]);
        // Comment::factory(10)->create();
        // Blog::factory(10)->create();

        Job::create([
            'name' => 'Aspal Hotmix'
        ]);
        Job::create([
            'name' => 'Paving Blog'
        ]);

        // Gallery::factory(10)->create();
    }
}
