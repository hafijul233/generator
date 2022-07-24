<?php

namespace Hafijul233\Generator\Database\Factories;

use Hafijul233\Generator\Models\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class GeneratorFactory
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Hafijul233\Generator\Models\Generator>
 */
class GeneratorFactory extends Factory
{
    protected $model = Generator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];
    }
}
