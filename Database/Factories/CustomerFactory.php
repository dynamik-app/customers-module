<?php
namespace Modules\Customers\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Customers\Models\Customer;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}