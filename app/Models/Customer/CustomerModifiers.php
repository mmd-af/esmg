<?php

namespace App\Models\Customer;

use Spatie\Sluggable\SlugOptions;

trait CustomerModifiers
{
    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'فعال' : 'غیرفعال';
    }
}
