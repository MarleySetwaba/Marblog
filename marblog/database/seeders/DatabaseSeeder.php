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
        //USE USER MODEL TO A CREATE A USER
        $user1 = User::create([
            'name' => 'Marley',
            'email' => 'marley@gmail.com',
            'password' => 'dieavirgin123'
        ]);
       //USE POST MODEL TO CREATE A POST
        $post1 = Post::create([
            'user_id' => $user1->id,
            'title' => 'My Favorite Song RN',
            'content' => 'Gus Dapperton - Moodna, Once With Grace'
        ]);
       
    }
}
