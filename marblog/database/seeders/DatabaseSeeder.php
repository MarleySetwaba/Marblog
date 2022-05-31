<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //
        $user = User::create([
            'name' => 'Marley',
            'email' => 'marley1@gmail.com',
            'password' => 'dieavirgin123'
        ]);

        $user->save();

        $post = Post::create([
            'user_id' => $user->id,
            'title' => 'Sade',
            'content' => 'I Love You'
        ]);

        $post->save();
    }
}
