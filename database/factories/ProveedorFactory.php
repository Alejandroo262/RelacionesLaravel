<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Proveedor::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(20),
            'cif' => $this->faker->numberBetween(2,20),
        ];
    }
}
