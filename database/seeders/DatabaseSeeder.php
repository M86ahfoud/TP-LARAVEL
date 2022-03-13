<?php

namespace Database\Seeders;

use App\Models\Category;
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
         //\App\Models\User::factory(10)->create();

       $var =  \App\Models\Category::factory()->create([

            'name' => 'Sumaung'

        ]);


        \App\Models\Product::factory(9)->create([

            'category_id' =>  $var->id 
        ]);

       $type =  \App\Models\Category::factory()->create([

            'name' => 'Nokia'

        ]);


        \App\Models\Product::factory(4)->create([

            'category_id' =>  $type->id 
        ]);
        
       $marque =  \App\Models\Category::factory()->create([

            'name' => 'LG'

        ]);


        \App\Models\Product::factory(3)->create([

            'category_id' =>  $marque->id 
        ]);

       $ruli=  \App\Models\Category::factory()->create([

            'name' => 'Hwawi'

        ]);


        \App\Models\Product::factory(2)->create([

            'category_id' =>  $ruli->id 
        ]);

       $model =  \App\Models\Category::factory()->create([

            'name' => 'Solid'

        ]);


        \App\Models\Product::factory(5)->create([

            'category_id' =>  $model ->id 
        ]);
    }
}
