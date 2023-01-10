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
                'name'=>"T-Shirt Oversize Stiching Black",
                'desc'=>"T-shirt Oversize merupakan T-shirt berkualitas tinggi dengan design yang menarik dan fresh di antara Local Brand Indonesia.",
                'price'=>110000,
                'photo'=>"Images//1.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"T-Shirt Oversize HD Pink",
                'desc'=>"T-Shirt Oversize saat ini menjadi pilihan terbaik untuk tampil stylish dengan produk yang berkualitas tinggi dan berbagai pilihan warna.",
                'price'=>95000,
                'photo'=>"images//2.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"T-Shirt Oversize HD Warm Orange",
                'desc'=>"T-Shirt Oversize saat ini menjadi pilihan terbaik untuk tampil stylish dengan produk yang berkualitas tinggi dan berbagai pilihan warna.",
                'price'=>95000,
                'photo'=>"images//3.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"T-Shirt Oversize HD Netral Black",
                'desc'=>"T-Shirt Oversize saat ini menjadi pilihan terbaik untuk tampil stylish dengan produk yang berkualitas tinggi dan berbagai pilihan warna.",
                'price'=>95000,
                'photo'=>"images//4.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"T-Shirt Oversize Basic Dark Black",
                'desc'=>"T-Shirt Basic saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia.",
                'price'=>95000,
                'photo'=>"images//5.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Short Pants Pink",
                'desc'=>"Short pants dengan bahan yang nyaman dan juga dapat dipakai untuk aktivitas sehari-hari.",
                'price'=>260000,
                'photo'=>"images//6.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Sweatpants Grey",
                'desc'=>"Jogger pants dengan bahan cotton fleece yang memiliki durability yang tinggi dan juga nyaman saat dipakai bepergian untuk aktivitas sehari-hari.",
                'price'=>210000,
                'photo'=>"images//7.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Long Pants Utica Pink",
                'desc'=>"Straight pants dengan ornamen garis di bagian depan dan juga detail belt untuk memberikan kesan sporty namun juga tetap stylish.",
                'price'=>270000,
                'photo'=>"images//8.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Track Pants Navy",
                'desc'=>"Celana kargo dengan kualitas Taslan Microfiber yang memiliki durability yang tinggi dan juga hangat saat dipakai.",
                'price'=>180000,
                'photo'=>"images//9.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Long Pants Brooklyn Pink",
                'desc'=>"Straight pants dengan details kupnat di bagian depan dihiasi ornamen bordir neon.",
                'price'=>270000,
                'photo'=>"images//10.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"Hoodie Sun And Fun Emerald",
                'desc'=>"Hoodie saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia.",
                'price'=>180000,
                'photo'=>"images//11.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"Hoodie Mothernature Steeple Grey",
                'desc'=>"Hoodie saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia.",
                'price'=>180000,
                'photo'=>"images//12.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"Hoodie Summer And Paradise Red",
                'desc'=>"Hoodie saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia.",
                'price'=>180000,
                'photo'=>"images//13.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"Hoodie Summer Fun Paradise Green",
                'desc'=>"Hoodie saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia.",
                'price'=>180000,
                'photo'=>"images//14.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"Hoodie The Wave Electric Blue",
                'desc'=>"Hoodie saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia.",
                'price'=>180000,
                'photo'=>"images//15.jpg",
            ],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
