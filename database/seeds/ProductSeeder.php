<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
           'name' => '巨峰',
           'description' => '大人気の巨峰です。約2Kg',
           'price' => '1500',
           'cover_img' => 'image/black.jpeg',
            
            ]);
            
        DB::table('products')->insert([
           'name' => 'シャインマスカット',
           'description' => '少数生産のためお早めにご注文ください。約2Kg',
           'price' => '1800',
           'cover_img' => 'image/shine.jpeg',
            
            ]);  
            
        DB::table('products')->insert([
           'name' => '巨峰＆シャインマスカット',
           'description' => '巨峰もシャインマスカットも欲しい方におすすめ。約2Kg',
           'price' => '3300',
           'cover_img' => 'image/grapes-set.jpeg',
            
            ]);  
    }
}
