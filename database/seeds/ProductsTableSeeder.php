<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
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
                'name' => 'Product 1',
                'description' => 'Lorem Ipsum',
                'price' => 30,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Lorem Ipsum',
                'price' => 40,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Lorem Ipsum',
                'price' => 50,
            ]
        ];

        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->name = $product['name'];
            $newProduct->description = $product['description'];
            $newProduct->price = $product['price'];
            $newProduct->save();
        }
    }
}
