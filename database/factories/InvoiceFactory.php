<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $base = $this->faker->randomFloat(2,100,1000);
        $iva = $base * 0.16;
        $total = $base + $iva;

        return [
            'serie' => $this->faker->randomElement(['F001','B002']),
            'base' => $base,
            'iva' => $iva,
            'total' => $total,
            'user_id' => User::all()->random()->id,
        ];
    }
}
