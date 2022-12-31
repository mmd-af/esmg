<?php

namespace App\Models\Category;

use App\Models\Image\Image;
use App\Models\Project;

trait CategoryRelationships
{
    public function projects()
    {
        return $this->morphedByMany(Project::class, 'categorizable');
    }

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
