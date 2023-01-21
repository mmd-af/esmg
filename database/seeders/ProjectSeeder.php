<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = Project::factory(30)->create();
        $categories = Category::all();
        foreach ($projects as $project) {
            $category = Category::find(rand(1, count($categories)));
            $project->categories()->attach($category);
        }
    }
}
