<?php

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
        $this->call([
            \Encore\Admin\Auth\Database\AdminTablesSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
