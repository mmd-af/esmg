<?php

namespace Database\Seeders;

use App\Models\Image\Image;
use App\Models\SlideShow\SlideShow;
use Illuminate\Database\Seeder;

class SlideShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slideShows=SlideShow::factory(10)->create();
        foreach ($slideShows as $slideShow){
            $image = new Image();
            $image->url = "http://127.0.0.1:8000/storage/photos/1/IMG_3922.JPG";
            $slideShow->images()->save($image);
        }
    }
}
