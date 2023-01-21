<?php

namespace Database\Factories\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ybazli\Faker\Facades\Faker;

class CategoryFactory extends Factory
{

    public function definition()
    {
        $title = Faker::jobTitle();
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'parent_id' => 0,
            'type' => 1,
            'description' => Faker::paragraph(),
            'image' => 'noset',
            'meta_title' => $title,
            'meta_description' => Faker::sentence(),
            'is_active' => 1
        ];
    }

}
