<?php

namespace App\Repositories\Site;

use App\Models\Customer\Customer;
use App\Models\Project;
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
            ->where('is_active', 1)
            ->orderBy('order')
            ->with('images')
            ->get();
    }

    public function getProjects()
    {
        return Project::query()
            ->where('is_active', '1')
            ->where('selected', 1)
            ->get();
    }
    public function getCustomers()
    {
        return Customer::query()
            ->select([
                'id',
                'title'
            ])
            ->with('images')
            ->where('is_active', '1')
            ->get();
    }

}
