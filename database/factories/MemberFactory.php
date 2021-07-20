<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_no' => '1' . str_pad($this->faker->unique()->randomNumber, 9, '0', STR_PAD_LEFT),
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => Hash::make('member'),
            'phone' => '08' . $this->faker->randomNumber(5, true) . $this->faker->randomNumber(5, true),
            'photo' => $this->faker->imageUrl(300, 300),
            'activation_token' => $this->faker->uuid,
            'activated_at' => $this->faker->dateTime($timezone = 'Asia/Jakarta')
        ];
    }
}
