<?php

namespace App\Repositories\Site;

use App\Models\Category\Category;

class CategoryRepository extends BaseRepository
{
    public function __construct(Category $model)
    {
        $this->setModel($model);
    }

    public function getCategory()
    {
        return $this->query()
            ->select([
                'id',
                'title',
                'slug'
            ])
            ->where('is_active', 1)
            ->get();
    }

    public function getByCategory($category)
    {
        return $this->query()
            ->where('slug', $category)
            ->with('projects')
            ->first();

    }

}
