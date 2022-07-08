<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GB, 512 GB SSD',
                'description' => 'Apple today announced M1 Pro and M1 Max, the next breakthrough chips for the Mac. Scaling up M1’s transformational architecture, M1 Pro offers amazing performance with industry-leading power efficiency, while M1 Max takes these capabilities to new heights. The CPU in M1 Pro and M1 Max delivers up to 70 percent faster CPU performance than M1, so tasks like compiling projects in Xcode are faster than ever. The GPU in M1 Pro is up to 2x faster than M1, while M1 Max is up to an astonishing 4x faster than M1, allowing pro users to fly through the most demanding graphics workflows. ',
                'brand' => 'Apple',
                'price' => '2499',
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Sumsung Galaxy Book Pro',
                'details' => '13.3 inch, 8GB, DDR4 SDRAM, 256GB',
                'description' => 'PC power thats smartphone thin. Our lightest Galaxy Book yet gives you a powerful Intel® 11th Gen Core™ processor, Intel® Evo™ certification, an advanced AMOLED screen and comes equipped with our latest wi-fi chip. Finish important projects, download huge files fast or watch movies in brilliant color. Discover the perfect mix of portability and productivity.',
                'brand' => 'Samsung',
                'price' => '1400',
                'shipping_cost' => 'storage/product2.png'
            ],
        ];

        foreach($products as $key => $value) {
            Product::create($value);
        }
    }
}
