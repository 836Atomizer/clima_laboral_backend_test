<?php

namespace Database\Factories;

use App\Models\Division;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Expr\AssignOp\Div;

class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'division_name' => $this->faker->name(),
            'division_id' => $this->faker->randomElement(Division::pluck('id')),
            'level' => $this->faker->numberBetween(1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'ambassador_id' => \App\Models\Ambassador::factory(),
        ];
    }
}
