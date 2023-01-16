<?php

namespace App\Http\Controllers\Site\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Repositories\Site\ProjectRepository;

class ProjectController extends Controller
{
    protected $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        $projects = $this->projectRepository->getAll();
        return view('site.projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('site.projects.show', compact('project'));
    }
}
