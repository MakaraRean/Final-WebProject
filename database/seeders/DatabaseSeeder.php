<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;
use App\Models\SocialMedia;

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
        Category::create([
            'name' => 'Social',
            'desc' => 'Social',
       ]);
         Category::create([
            'name' => 'Technology',
            'desc' => 'Technology',
        ]);
         Category::create([
            'name' => 'Sport',
            'desc' => 'Sport',
        ]);

        // SocialMedia::create([
        //     'user_id' => '1',
        //     'website_link' => 'www.reanmakara.com',
        //     'facebook' => 'Rean Makara',
        //     'facebook_link' => 'https://www.facebook.com/hawaii.acoustic/',
        //     'github' => 'Rean Makara',
        //     'github_link' => 'https://github.com/MakaraRean',
        //     'twitter' => 'Rean Makara',
        //     'twitter_link' => 'https://twitter.com/ReanMakara7',
        //     'instagram' => 'Rean Makara',
        //     'instagram_link' => 'https://www.instagram.com/r.makara22/',
        // ]);
    }
}
