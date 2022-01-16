<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Cliente;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Producto::class;

    public function definition()
    {
        return [
            'clientes_id' => Cliente::factory(),
            'proveedor_id' => Proveedor::factory(),
            'nombre' => $this->faker->name(20),
            'pais_origen' => $this->faker->name(20),

        ];
    }
}
