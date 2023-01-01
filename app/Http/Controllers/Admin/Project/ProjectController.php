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
            'employer_name' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'logo_image' => 'required|image|max:500',
            'primary_image' => 'required|image|max:500',
            'customer_image' => 'nullable|image|max:500',
            'description' => 'required|string',
            'year_enforce' => 'required|string|max:255',
            'category' => 'required',
            'is_active' => 'required',
            'images' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png,svg',
        ]);

        if ($request->customer_image) {
            $customer_image = $request->customer_image;
        } else {
            $customer_image = null;
        }
        $projectImageController = new ProjectImageController();
        $fileNameImages = $projectImageController->upload(
            $request->logo_image,
            $request->primary_image,
            $request->customer_image,
            $request->images
        );

        $project = Project::create([
            'project_name' => $request->project_name,
            'slug' => Str::slug($request->input('slug')),
            'employer_name' => $request->employer_name,
            'project_location' => $request->project_location,
            'logo_image' => $fileNameImages['fileNameLogoImage'],
            'primary_image' => $fileNameImages['fileNamePrimaryImage'],
            'customer_image' => $fileNameImages['fileNameCustomerImage'],
            'description' => $request->description,
            'year_enforce' => $request->year_enforce,
            'interval' => $request->interval,
            'is_active' => $request->is_active,
        ]);

        $project->categories()->attach($request->input('category'));

        foreach ($fileNameImages['fileNameImages'] as $fileNameImage) {
            ProjectImage::create([
                'project_id' => $project->id,
                'image' => $fileNameImage
            ]);
        }

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
