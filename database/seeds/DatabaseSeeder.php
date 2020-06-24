<?php

use App\comments;
use App\posts;
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
        // $this->call(UserSeeder::class);
        
        factory(posts::class,20)->create();
        factory(comments::class,20)->create();
        //test git

    }
}
