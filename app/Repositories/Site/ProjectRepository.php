<?php

namespace App\Repositories\Site;

use App\Models\Project;

class ProjectRepository extends BaseRepository
{
    public function getAll()
    {
        return Project::query()
            ->select([
                'id',
                'project_name',
                'slug',
                'employer_name',
                'project_location',
                'primary_image',
                'logo_image',
                'description',
                'year_enforce'
            ])
            ->where('is_active', 1)
            ->latest()
            ->paginate(10);
    }
}
