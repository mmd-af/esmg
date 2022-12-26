<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\ProjectImageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects= Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'project_name' => 'required|string|max:255',
            'employer_name' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'logo_image' => 'required|image|max:500',
            'primary_image' => 'required|image|max:500',
            'customer_image' => 'nullable|image|max:500',
            'description' => 'required|string',
            'year_enforce' => 'required|string|max:255',
            'images' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png,svg',
        ]);

         if ($request->customer_image) {
             $customer_image=$request->customer_image;
         }
         else {
             $customer_image=null;
         }


        $projectImageController = new ProjectImageController();
        $fileNameImages = $projectImageController->upload(
            $request->logo_image,
            $request->primary_image,
            $request->customer_image,
            $request->images
        );

        $project= Project::create([
            'project_name' =>   $request->project_name,
            'employer_name' => $request->employer_name,
            'project_location' => $request->project_location,
            'logo_image' => $fileNameImages['fileNameLogoImage'],
            'primary_image' => $fileNameImages['fileNamePrimaryImage'],
            'customer_image' => $fileNameImages['fileNameCustomerImage'],
            'description' => $request->description,
            'year_enforce' => $request->year_enforce,
        ]);

        foreach ($fileNameImages['fileNameImages'] as $fileNameImage) {
            ProjectImage::create([
                'project_id' => $project->id,
                'image' => $fileNameImage
            ]);
        }

        alert()->success('پروژه ی مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $projects= Project::latest()->paginate(4);
        return view('site.index', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {

        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Project $project)
    {

        $request->validate([
            'project_name' => 'required|string|max:255',
            'employer_name' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'description' => 'required|string',
            'year_enforce' => 'required|string|max:255',
        ]);

        $project->update([
            'project_name' =>   $request->project_name,
            'employer_name' => $request->employer_name,
            'project_location' => $request->project_location,
            'description' => $request->description,
            'year_enforce' => $request->year_enforce,
        ]);
        alert()->success('پروژه ی مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('projects.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {


    foreach ($project->images as $image) {
     deleteFile($image->image);
     ProjectImage::where('id',$image->id)->delete();
}



deleteFile($project->logo_image);
deleteFile($project->primary_image);
deleteFile($project->customer_image);
$project->delete();
alert()->success('پروژه ی مورد نظر حذف شد', 'باتشکر');
 return redirect()->route('projects.index');

    }
}
