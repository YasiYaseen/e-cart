<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        $images =[
            'images/b1.jpeg',
            'images/b2.jpeg',
            'images/b3.jpeg',
            'images/d1.jpeg',
            'images/d2.jpeg',
            'images/i2.jpeg',
            'images/iphone1.jpeg',
            'images/j1.jpeg',
            'images/j2.jpeg',
            'images/j3.jpeg',
            'images/m1.jpeg',
            'images/p1.jpeg',
            'images/p2.jpeg',
            'images/s1.jpeg',
            'images/s2.jpeg',
            'images/s3.jpeg',
            'images/s4.jpeg',
            'images/s5.jpeg',
            'images/sh1.jpeg',
            'images/sh2.jpeg',
            'images/sh3.jpeg',
            'images/sh4.jpeg',
            'images/sh5.jpeg',
            'images/sh6.jpeg',
            'images/sh7.jpeg',
            'images/sh8.jpeg',
            'images/w1.jpeg',
            'images/w2.jpeg',
            'images/w3.jpeg',
            'images/w4.jpeg',
            'images/w5.jpeg',
        ];
        return [
            'name'=>fake()->word(),
            'price'=> fake()->randomFloat(6,1000,100000),
            'description'=>fake()->sentence(20),
            'image'=>$images[array_rand($images)],

        ];
    }
}
