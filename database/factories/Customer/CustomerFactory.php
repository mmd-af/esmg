<?php

namespace Database\Factories\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ybazli\Faker\Facades\Faker;

class CustomerFactory extends Factory
{

    public function definition()
    {
        $title = Faker::jobTitle();
        return [
            'title' => $title,
            'is_active' => 1
        ];
    }

}
