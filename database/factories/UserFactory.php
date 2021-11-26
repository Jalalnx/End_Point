<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            "last_name" => $this->faker->lastName,
            "nataional_number" => $this->faker->numberBetween(1000,1000000000000),
            "phone_number" => $this->faker->numberBetween(100000,1000000000000),
            'email' => $this->faker->unique()->safeEmail(),
            'img_url' => 'http://lorempixel.com/400/200/sports/',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ];
    }


}
