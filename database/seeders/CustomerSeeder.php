<?php

namespace Database\Seeders;

use App\Models\Customer\Customer;
use App\Models\Image\Image;
use App\Models\SlideShow\SlideShow;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $customers=Customer::factory(10)->create();
        foreach ($customers as $customer){
            $image = new Image();
            $image->url = "http://127.0.0.1:8000/storage/photos/1/348s.jpg";
            $customer->images()->save($image);
        }
    }
}
