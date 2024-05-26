<?php

namespace Database\Factories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        return [
            'code_module' => $this->faker->unique()->regexify('[A-Za-z0-9]{10}'),
            'libelle_module' => $this->faker->sentence(3),
            'masse_hor_presentielle' => $this->faker->randomNumber(2),
            'masse_hor_distantielle' => $this->faker->randomNumber(2),
            'bilan_compet_module' => $this->faker->text(20),
        ];
    }
}
