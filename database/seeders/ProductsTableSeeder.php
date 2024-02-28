<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 $products = [
                [
                    'name' => "Adidas CloudFoam Ultimate",
                    'description' => 'Adidas Cloudfoam Ultimate in striking red offers a modern knit upper and Cloudfoam cushioning for unmatched comfort and style, perfect for everyday wear.',
                    'quantity' => 2,
                    'price' => 200.10,
                    'image' => 'https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/1038959/2015/12/7/11449479796511-INVICTUS-Red--Navy-Checked-Slim-Formal-Shirt-4621449479796242-3.jpg',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],

                [
                    'name' => "Adidas CloudFoam Ultimate",
                    'description' => 'Adidas Cloudfoam Ultimate in striking red offers a modern knit upper and Cloudfoam cushioning for unmatched comfort and style, perfect for everyday wear.',
                    'quantity' => 2,
                    'price' => 200.10,
                    'image' => 'https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/1038959/2015/12/7/11449479796511-INVICTUS-Red--Navy-Checked-Slim-Formal-Shirt-4621449479796242-3.jpg',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],

                [
                    'name' => "Adidas NMD R1 Triple White",
                    'description' => 'Adidas NMD R1 combines clean, modern style with unparalleled comfort. Featuring a knit upper and responsive Boost cushioning, these shoes are perfect for everyday wear.',
                    'quantity' => 2,
                    'price' => 300.10,
                    'image' => 'https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/1038959/2015/12/7/11449479796511-INVICTUS-Red--Navy-Checked-Slim-Formal-Shirt-4621449479796242-3.jpg',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],



            ];

            DB::table('products')->insert($products);
        }
    }

?>
