<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'description' => $this->faker->sentence(1000),
            'business_name' =>$this->faker->name,
            'legal_status' =>$this->faker->sentence(3),
            'capital' =>$this->faker->numberBetween(1,10000),
            'siret' => $this->faker->numberBetween(10000000000000,99999999999999),//14 chiffre dans le siret
            'naf_code' =>$this->faker->numberBetween(1000,9999) . $this->faker->randomLetter(1),
            'country' => $this->faker->country(),
            'address' =>$this->faker->address(),
            'postal_code' =>$this->faker->postcode(),
            'city' =>$this->faker->city(),
            'user_id' => DB::table('users')->get('id')->random(1)->first()->id
        ];
    }
}
