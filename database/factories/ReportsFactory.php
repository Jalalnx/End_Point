<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Reports;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reports::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userID' => $this->faker->numberBetween(2,280),
            'description' => $this->faker->sentence(20),
            'Report_type' => $this->faker->text(20),
            'Report_Loction' => $this->faker->text(50),
            'Report_Level' => $this->faker->numberBetween(0,3),
            'status' =>$this->faker->numberBetween(1,4),
            'coordinates' =>'13.4567 - 31.4567',
            'Data_Time' => $this->faker->dateTimeBetween('-30 days', '+30 days')
        ];
    }
}
