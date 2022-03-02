<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        return [
            'nom' => 'Produit',
            'description' => $this->faker->text( 100),
            'prix' => rand(50,  100),
            'coup_de_coeur' => $this->faker->boolean($chanceOfGettingTrue = 50), 
            'image' => 'http://via.placeholder.com/640x360/',
            'liste_couleurs' => $this->faker->colorName(),
            'promotion' =>rand(10, 70),
            'dat_creation' => now(), 
            //
        ];
    }
}
