<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\File ;
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
        $jsonString = File::get(base_path('MOCK_DATA.json'));
        $data = json_decode($jsonString, true);
        
        foreach ($data as $product){
           Product::create(array(
               'id' => $product['id'],
               'title' => $product['title'],
               'price' => $product['price'],
               'description' =>$product['description'],
               'longDescription' => $product['long_description'],
               'actif' => $product['actif'],
               'stock'=> $product['stock'],
               'image'=> $product['image1'],
           )); 
        }
    }
}
