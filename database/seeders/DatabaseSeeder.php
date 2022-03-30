<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;
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
    }
}
