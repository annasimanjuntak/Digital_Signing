<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'file_name'=>$this->faker->word(),
            'uploader'=>$this->faker->name(),
            'path'=>$this->faker->name(),
            'status'=>$this->faker->randomElement(['Action Required','Waiting for Others','Expiring Soon','Completed']),
            'expired'=>$this->faker->dateTimeBetween('+1 days', '+3 days'),
            'signing_participation_type'=>$this->faker->randomElement(['Me Only','Me and Others','Others Only']),
            'user_id'=>mt_rand(1,4)
        ];
    }


}
