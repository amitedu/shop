<?php

declare(strict_types=1);

namespace Database\Factories;

use Domains\Customer\Models\Location;
use Domains\Customer\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class AddressFactory extends Factory
{
    public function definition(): array
    {
        return [
            'label' => Arr::random([
                'Home',
                'Office',
                'Head Office',
                'Mums House',
            ]),
            'billing' => $this->faker->boolean,
            'user_id' => User::factory()->create(),
            'location_id' => Location::factory()->create(),
        ];
    }

    public function billing(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'billing' => TRUE,
            ];
        });
    }

    public function shipping(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'shipping' => FALSE,
            ];
        });
    }
}
