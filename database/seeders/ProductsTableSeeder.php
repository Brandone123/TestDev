<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = Product::create([
            'titre' => 'Okok', 
            'description' => 'repas camer',
            'vendeur' => 'brand',
            'image' => 'repas.png'
        ]);

        $product = Product::create([
            'titre' => 'Koki', 
            'description' => 'repas camer',
            'vendeur' => 'brand',
            'image' => 'repas.png'
        ]);

        $product = Product::create([
            'titre' => 'lalo', 
            'description' => 'repas camer',
            'vendeur' => 'sape',
            'image' => 'repas.png'
        ]);

        $product = Product::create([
            'titre' => 'kondres', 
            'description' => 'repas camer',
            'vendeur' => 'sape',
            'image' => 'repas.png'
        ]);
    }
}
