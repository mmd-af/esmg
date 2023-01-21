<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ybazli\Faker\Facades\Faker;

class ProjectFactory extends Factory
{

    public function definition()
    {
        $slug = Str::slug(Faker::jobTitle());
        return [
            'project_name' => Faker::jobTitle(),
            'slug' => $slug,
            'interval' => rand(3000, 4000),
            'employer_name' => Faker::fullName(),
            'project_location' => Faker::city(),
            'year_enforce' => Faker::age(1380, 1401),
            'logo_image' => 'http://127.0.0.1:8000/storage/photos/1/348s.jpg',
            'primary_image' => 'http://127.0.0.1:8000/storage/photos/1/348s.jpg',
            'description' => Faker::paragraph(),
            'selected' => 1,
            'is_active' => 1,
        ];
    }

}
