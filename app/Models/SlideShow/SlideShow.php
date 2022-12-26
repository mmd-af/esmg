<?php

namespace App\Models\SlideShow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;

class SlideShow extends Model
{
    use HasFactory,
        SoftDeletes,
        SlideShowRelationships,
        SlideShowModifiers,
        hasSlug;

    protected $table = 'slideshows';
}
