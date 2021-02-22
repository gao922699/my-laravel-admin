<?php

use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Permission;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            [
                'name'        => 'Articles manage',
                'slug'        => 'articles.manage',
                'http_method' => '',
                'http_path'   => '/articles',
            ]
        ]);

        Menu::insert([
            [
                'parent_id' => 0,
                'order'     => 3,
                'title'     => 'Articles',
                'icon'      => 'fa-book',
                'uri'       => 'articles',
            ],
        ]);
    }
}
