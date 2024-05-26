<?php

namespace Database\Factories;
use App\Models\PreparationSequence;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreparationSequenceFactory extends Factory
{
    protected $model = PreparationSequence::class;

    public function definition()
    {
        return [
            'preparation' => $this->faker->unique()->sentence(3),
            'heure' => $this->faker->time(),
            'entier' => $this->faker->randomNumber(2),
            'type_espace_formation' => $this->faker->word(),
            'objectif_sequence' => $this->faker->sentence(5),
            'contenu_rappel' => $this->faker->paragraph,
            'duree_rappel' => $this->faker->randomNumber(2),
            'motivation' => $this->faker->paragraph,
            'duree_motiv' => $this->faker->randomNumber(2),
            'plan' => $this->faker->paragraph,
            'duree_plan' => $this->faker->randomNumber(2),
            'developpement1' => $this->faker->paragraph,
            'mthod_pedagog_dev1' => $this->faker->word(),
            'duree_dev1' => $this->faker->randomNumber(2),
            'developpement2' => $this->faker->paragraph,
            'mthod_pedagog_dev2' => $this->faker->word(),
            'duree_dev2' => $this->faker->randomNumber(2),
            'developpement3' => $this->faker->paragraph,
            'mthod_pedagog_dev3' => $this->faker->word(),
            'duree_dev3' => $this->faker->randomNumber(2),
            'synthese' => $this->faker->paragraph,
            'duree_synthese' => $this->faker->randomNumber(2),
            'evaluation' => $this->faker->paragraph,
            'duree_evaluation' => $this->faker->randomNumber(2),
            'connexion' => $this->faker->paragraph,
            // Add your other default values here
        ];
    }
}
