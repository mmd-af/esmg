<?php

namespace App\Repositories\Site;

use App\Models\SlideShow\SlideShow;

class HomeRepository extends BaseRepository
{
    public function getSlideShow()
    {
        return SlideShow::query()
            ->select([
                'id',
                'title',
                'description',
                'interval',
                'link_text',
                'link'
            ])
            ->orderBy('order')
            ->with('images')
            ->get();
    }

}
