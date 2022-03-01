<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       $product =  \App\Models\Product::factory(30)->create();

       


        DB::table('products')->insert ([

                'nom' => Str::random(),
                'description' => (bool) rand(0, 1) ,
                'prix' => rand(25000, 150000),
                'coup_de_coeur' => (bool) rand(0, 1) ,
                'image' => 'https://dummyimage.com/photos/random?count=30',
                'liste_couleurs' => 'null',
                'promotion' => rand(10, 70),
                'dat_creation' => now(),
            ]);
        
    }
}
