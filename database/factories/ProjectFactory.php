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
        $startAt = $this->faker->dateTimeBetween("-5 years");

        return [
            "manager_name" => $this->faker->name(),
            "manager_surname" => $this->faker->name(),
            "phone_number" => $this->faker->phoneNumber(),
            "manager_email" => $this->faker->unique()->email,
            "title" => $this->faker->sentence(),
            "description" => $this->faker->sentence(),
            "start_at" => $startAt,
            "end_at" => $this->faker->dateTimeBetween($startAt, null),
            "status" => $this->faker->randomElement(["CURRENT", "DONE", "CANCEL"]),
            "days_sold" => $this->faker->numberBetween(0, 100),
            "client_id" => DB::table("clients")->get("id")->random(1)->first()->id
        ];
    }
}
