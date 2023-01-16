<?php

namespace App\Models\Customer;

use App\Models\Image\Image;

trait CustomerRelationships
{
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
