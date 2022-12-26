<?php

namespace App\Repositories\Site;

use App\Models\SlideShow\SlideShow;

class SlideShowRepository extends BaseRepository
{
    public function __construct(SlideShow $model)
    {
        $this->setModel($model);
    }

    public function getData()
    {
        return $this->query()
            ->select([
                'id',
                'title',
                'description'
            ])
            ->where('is_active', 1)
            ->with('images')
            ->get();
    }

}
