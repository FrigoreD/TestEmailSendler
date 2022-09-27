<?php

namespace Database\Factories;

use App\Models\Email;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $emails = Email::all()->pluck('email');
        return [
            'username' => $this->faker->userName(),
            'email'=> $this->faker->randomElement($emails),
            'validts'=> Carbon::now()->addMonth()->subDays(rand(1, 27))->timestamp,
            'confirmed' => false,
        ];
    }
}
