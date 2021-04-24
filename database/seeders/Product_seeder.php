<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Vivo',
            'price'=>'15000',
            'category'=>'mobile',
            'gallery'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.toiimg.com%2Fphoto%2Fmsid-80596648%2F80596648.jpg&imgrefurl=https%3A%2F%2Fm.timesofindia.com%2Fmost-searched-products%2Ftodays-deals%2Famazon%2Famazon-sale-get-rs-10000-off-on-vivo-mobiles-at-the-amazon-vivo-carnival-days%2Farticleshow%2F80596611.cms&tbnid=nBRpXkPd0tdlQM&vet=12ahUKEwiq5tKtoJbwAhUMXisKHcpjA1cQMygAegUIARCfAg..i&docid=MVoo3dKpIWnrRM&w=1200&h=900&q=mobiles&ved=2ahUKEwiq5tKtoJbwAhUMXisKHcpjA1cQMygAegUIARCfAg',
            'description'=>'4 gb ram , 64 gb storage variant'
            ],
            ['name'=>'mi tv',
            'price'=>'400000',
            'category'=>'tv',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/710weRkP-nL._SL1500_.jpg',
            'description'=>'it is a tv'
            ],
            ['name'=>'samsaung',
            'price'=>'25000',
            'category'=>'mobile',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/710weRkP-nL._SL1500_.jpg',
            'description'=>'4 gb ram , 64 gb storage variant'
            ],
            ]);
    }
}
