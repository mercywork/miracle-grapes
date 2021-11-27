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
           'detail' => '大人気の巨峰です。約2Kg',
           'fee' => '1,500円(税込）',
           'imgpath' => 'image/black.jpeg',
            
            ]);
            
        DB::table('products')->insert([
           'name' => 'シャインマスカット',
           'detail' => '少数生産のためお早めにご注文ください。約2Kg',
           'fee' => '1,800円(税込）',
           'imgpath' => 'image/shine.jpeg',
            
            ]);  
            
        DB::table('products')->insert([
           'name' => '巨峰＆シャインマスカット',
           'detail' => '巨峰もシャインマスカットも欲しい方におすすめ。約2Kg',
           'fee' => '3,300円(税込）',
           'imgpath' => 'image/grapes-set.jpeg',
            
            ]);  
    }
}
