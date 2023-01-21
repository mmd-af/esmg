<?php

namespace Database\Seeders;

use App\Models\Image\Image;
use App\Models\Category\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(5)->create();
        foreach ($categories as $category) {
            $image = new Image();
            $image->url = "http://127.0.0.1:8000/storage/photos/1/IMG_3922.JPG";
            $category->images()->save($image);
        }
    }
}
