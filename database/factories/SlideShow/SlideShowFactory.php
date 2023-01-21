<?php

namespace Database\Factories\SlideShow;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ybazli\Faker\Facades\Faker;

class SlideShowFactory extends Factory
{

    public function definition()
    {
//        $title = $this->faker->realTextBetween(5, 45);
        $title = Faker::jobTitle();
        $slug = Str::slug($title);
//        $user = User::count() >= 20 ? User::inRandomOrder()->first()->id: User::factory();
//        $category = Category::count() >= 7 ? Category::inRandomOrder()->first()->id: Category::factory();


        return [
            'title' => $title,
            'slug' => $slug,
            'description' => Faker::paragraph(),
            'interval' => rand(2000, 4000),
            'link_text' => Faker::word(),
            'link' => "google.com",
            'order' => rand(1, 50),
            'is_active' => 1
        ];
    }

}
