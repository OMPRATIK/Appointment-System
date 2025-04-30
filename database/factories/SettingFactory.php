<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bname' => 'BKM',
            'email' => 'admin@yourmail.com',
            'phone' => '+91 9462368253',
            'currency' => 'INR',
            'meta_title' => 'BKM - Advance Booking System',
        ];
    }
}
