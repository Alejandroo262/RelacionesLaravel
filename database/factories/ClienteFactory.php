<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(20),
            'apellidos' => $this->faker->name(20),
            'telefono' => $this->faker->numberBetween(2,20),
        ];
    }
}
