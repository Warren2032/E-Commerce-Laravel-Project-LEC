<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'category_id'=>1,
                'name'=>"CPlayStation PS5 Console – God of War Ragnarök Bundle",
                'desc'=>"From Santa Monica Studio comes the sequel to the critically acclaimed God of War (2018). Join Kratos and Atreus on a mythic journey for answers before Ragnarök arrives.",
                'price'=>8760252,
                'photo'=>"Images//1.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"Xbox Series S - Holiday Console",
                'desc'=>"Experience next-gen speed and performance at a great price.",
                'price'=>1564330,
                'photo'=>"images//2.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Meta Quest 2 — Advanced All-In-One Virtual Reality Headset — 128 GB",
                'desc'=>"For ages 13 and up only. *Offer valid with the purchase of a new Meta Quest 2 device (128GB or 256GB) (“Qualifying Product”) between August 1, 2022 12:01 AM PST– December 31, 2022 11:59 PM PST and while supplies last.",
                'price'=>6257323,
                'photo'=>"images//3.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Nintendo Switch – OLED Model w/ White Joy-Con",
                'desc'=>"Introducing the newest member of the Nintendo Switch family Play at home on the TV or on-the-go with a vibrant 7-inch OLED screen with the Nintendo Switch – OLED Model system. ",
                'price'=>5475157,
                'photo'=>"images//4.jpg",
            ],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
