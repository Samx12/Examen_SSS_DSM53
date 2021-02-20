<?php

namespace Database\Seeders;

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
        Users::factory(10)->create();
        Category::factory(10)->create();
        Tags::factory(10)->create();
        Images::factory(10)->create();
        Posts::factory(10)->create();
        Tags::factory(10)->create();
        Post_tag::factory(10)->create();    }
}
