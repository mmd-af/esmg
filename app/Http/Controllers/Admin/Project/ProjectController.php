<?php

namespace App\Http\Controllers\Admin\Project;

use App\Enums\ECategoryType;
use App\Http\Controllers\Admin\ProjectImageController;
use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $categories = Category::query()
            ->select([
                'id',
                'title'
            ])
            ->where('is_active', 1)
            ->where('type', ECategoryType::PROJECT)
            ->get();
        return view('admin.projects.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'interval' => 'required|integer|max:20000',
            'employer_name' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'year_enforce' => 'required|string|max:255',
            'logo_image' => 'required',
            'primary_image' => 'required',
            'description' => 'required|string',
            'category' => 'required',
            'is_active' => 'required'
        ]);
        $project= new Project();
        $project->project_name= $request->project_name;
        $project->slug= Str::slug($request->input('slug'));
        $project->interval= $request->interval;
        $project->employer_name= $request->employer_name;
        $project->project_location= $request->project_location;
        $project->year_enforce= $request->year_enforce;
        $project->logo_image= $request->logo_image;
        $project->primary_image= $request->primary_image;
        $project->description= $request->description;
        $project->is_active= $request->is_active;
        $project->save();
        $project->categories()->attach($request->input('category'));
        alert()->success('پروژه ی مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('projects.index');
    }

    public function show()
    {
        $projects = Project::latest()->paginate(4);
        return view('site.index', compact('projects'));
    }

    public function edit(Project $project)
    {
        $categories = Category::query()
            ->select([
                'id',
                'title'
            ])
            ->where('is_active', 1)
            ->where('type', ECategoryType::PROJECT)
            ->get();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {

        $request->validate([
            'project_name' => 'required|string|max:255',
            'employer_name' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'description' => 'required|string',
            'year_enforce' => 'required|string|max:255',
            'category' => 'required',
            'interval' => 'required',
            'is_active' => 'required',
        ]);

        $project->update([
            'project_name' => $request->project_name,
            'employer_name' => $request->employer_name,
            'project_location' => $request->project_location,
            'description' => $request->description,
            'year_enforce' => $request->year_enforce,
            'interval' => $request->interval,
            'is_active' => $request->is_active,
        ]);
        $project->categories()->sync($request->input('category'));
        alert()->success('پروژه ی مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('projects.index');
    }

    public function setSelected(Request $request)
    {
        $project = Project::query()
            ->select([
                'id',
                'selected'
            ])
            ->where('id', $request->id)
            ->first();
        $project->selected = $project->selected ? 0 : 1;
        $project->save();
        return response(['response' => 'successfully']);
    }

    public function destroy(Project $project)
    {
        foreach ($project->images as $image) {
            deleteFile($image->image);
            ProjectImage::where('id', $image->id)->delete();
        }
        deleteFile($project->logo_image);
        deleteFile($project->primary_image);
        deleteFile($project->customer_image);
        $project->delete();
        alert()->success('پروژه ی مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('projects.index');

    }
}
