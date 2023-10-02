<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {

        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory(10)->create();
        $persona1 = Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        $family = Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);

        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Post::create([
            'user_id'=> 1,
            'category_id'=> 2,
            'title'=>'My annoying but likable bestfriend',
            'slug'=>'my-family-post',
            'excerpt'=>'<p>So its funny how life works, there is really no formula</p>',
            'body'=>'<p>I been with this person for a few weeks now, and I already like him. 
            The person is annoying, yes but it cant be helped. So yesterday we just 
            became bestfriends.</p>'
        ]);

        
        Post::create([
            'user_id'=> 2,
            'category_id'=> 1,
            'title'=>'My very challenging but promising job',
            'slug'=>'my-work-post',
            'excerpt'=>'<p>Yes, am struggling to find my way in this Laravel framework.</p>',
            'body'=>'<p>Its almost a month since i started interning, ive been learning laravel,
            my team is kind enough to let me take my time and familiarize myself with the
            framework, yet i cant help but be frustrarted with myself since im taking too 
            much time.</p>'
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
