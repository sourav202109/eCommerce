<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Samsung mobile',
                'price'=>'500',
                'category'=>'mobile',
                'description'=>'Mobile with much more featers and iotion like camera ,8-gb ram',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2021/07/Samsung-Galaxy-M32-image.jpg'
                
            ],
            [
                'name'=>'Smart Tv',
                'price'=>'1400',
                'category'=>'Tv',
                'description'=>'Extra large screen and Remote less featers',
                'gallery'=>'https://static.compareindia.news18.com/compareindia/gallery/images/2019/aug/kodaktv_291328041642.jpg'
                
            ],
            [
                'name'=>'Tv',
                'price'=>'1000',
                'category'=>'Tv',
                'description'=>'Family tv . It has remote,gorila glass, Dolbee sound,live voice search.',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/realme-smart-tv-43-db-800x450-1590390507.jpg?downsize=*:420&output-quality=80'
                
            ],
            [
                'name'=>'Fridge',
                'price'=>'1900',
                'category'=>'fridge',
                'description'=>'feel like SYBERYA. no need any electricity,',
                'gallery'=>'https://cdn.vox-cdn.com/thumbor/a0ZZ6zNq9SyLLzjGE6gB3v0tWyE=/0x0:2500x1667/920x613/filters:focal(1050x634:1450x1034):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/66012986/Family_Hub_CES2020_Black__1_.0.jpg'
                
            ]
        ]);
    }
}
