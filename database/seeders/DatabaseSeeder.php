<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@ranteindo.com',
            'password' => bcrypt('admin12345'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $icons = [
            [
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 01",
                "body" => "img/service-icon-01.png",
                "href"  => "img/service-icon-01.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 02",
                "body" => "img/service-icon-02.png",
                "href"  => "img/service-icon-02.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 03",
                "body" => "img/service-icon-03.png",
                "href"  => "img/service-icon-03.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 04",
                "body" => "img/service-icon-04.png",
                "href"  => "img/service-icon-04.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 05",
                "body" => "img/service-icon-05.png",
                "href"  => "img/service-icon-05.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 06",
                "body" => "img/service-icon-06.png",
                "href"  => "img/service-icon-06.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 07",
                "body" => "img/service-icon-07.png",
                "href"  => "img/service-icon-07.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 08",
                "body" => "img/service-icon-08.png",
                "href"  => "img/service-icon-08.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 09",
                "body" => "img/service-icon-09.png",
                "href"  => "img/service-icon-09.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 10",
                "body" => "img/service-icon-10.png",
                "href"  => "img/service-icon-10.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 11",
                "body" => "img/service-icon-11.png",
                "href"  => "img/service-icon-11.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 12",
                "body" => "img/service-icon-12.png",
                "href"  => "img/service-icon-12.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 13",
                "body" => "img/service-icon-13.png",
                "href"  => "img/service-icon-13.png"
            ],[
                "parent_id" => 1,
                "children_id" => 1,
                "title" => "Icon 14",
                "body" => "img/service-icon-14.png",
                "href"  => "img/service-icon-14.png"
            ]
        ];
        foreach ($icons as $icon) {
            Item::create($icon);
        };

    }
}
