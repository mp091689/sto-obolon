<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenusTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(EmailsTableSeeder::class);
    }
}
