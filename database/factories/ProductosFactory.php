<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foto' => $this->faker->imageUrl(150,150),
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
            'precio'=> $this->faker->randomFloat(),
            'cantidadAlmacen'=> $this->faker->randomDigit(),
        ];
    }
}
