<?php

namespace App\Models\SlideShow;

use App\Models\Image\Image;

trait SlideShowRelationships
{
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
