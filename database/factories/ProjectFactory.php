<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $startAt = $this->faker->dateTime();

        return [
            "manager_name" => $this->faker->name(),
            "manager_surname" => $this->faker->name(),
            "phone_number" => $this->faker->randomNumber(10),
            "manager_email" => $this->faker->unique()->email,
            "title" => $this->faker->sentence(),
            "description" => $this->faker->sentences(),
            "start_at" => $startAt,
            "end_at" => $this->faker->dateTimeBetween($startAt, null),
            "status" => $this->faker->randomKey(["CURRENT", "DONE", "CANCEL"]),
            "days_sold" => $this->faker->randomNumber(),
            "client_id" => DB::table("clients")->get("id")->random()->first()->id
        ];
    }
}
