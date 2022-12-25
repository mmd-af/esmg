<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProjectImageController extends Controller
{
    public function upload($logo_image, $primaryImage, $customerImage, $images)
    {

        $fileNameLogoImage = generateFileName($logo_image->getClientOriginalName());
        $logo_image->move(public_path('/upload/projects/'), $fileNameLogoImage);

        $fileNamePrimaryImage = generateFileName($primaryImage->getClientOriginalName());
        $primaryImage->move(public_path('/upload/projects/'), $fileNamePrimaryImage);

        $fileNameCustomerImage = generateFileName($customerImage->getClientOriginalName());
        $customerImage->move(public_path('/upload/projects/'), $fileNameCustomerImage);



        $fileNameImages = [];
        foreach ($images as $image) {
            $fileNameImage = generateFileName($image->getClientOriginalName());

            $image->move(public_path('/upload/projects/'), $fileNameImage);

            array_push($fileNameImages,  $fileNameImage);
        }

        return [
            'fileNameLogoImage' => $fileNameLogoImage,
            'fileNamePrimaryImage' => $fileNamePrimaryImage,
            'fileNameCustomerImage' => $fileNameCustomerImage,
            'fileNameImages' => $fileNameImages
        ];
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'image_id' => 'required|exists:project_images,id'
        ]);
        $imagename=ProjectImage::where('id', $request->image_id)->first();
        deleteFile($imagename->image);
        ProjectImage::destroy($request->image_id);

        alert()->success('تصویر پروژه ی مورد نظر حدف شد', 'باتشکر');
        return redirect()->back();
    }

    public function setPrimary(Request $request, Project $project)
    {
        $request->validate([
            'image_id' => 'required|exists:project_images,id'
        ]);

        ProjectImage::create([
            'project_id' => $project->id,
            'image' => $project->primary_image
        ]);

        $projectImage = ProjectImage::findOrFail($request->image_id);
        $project->update([
            'primary_image' => $projectImage->image
        ]);
        $projectImage->delete();
        alert()->success('ویرایش تصویر اصلی با موفقیت انجام شد', 'باتشکر');
        return redirect()->back();
    }

    public function add(Request $request, Project $project)
    {

        $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png,svg',
        ]);
        foreach ($request->images as $image) {
            $fileNameImage = generateFileName($image->getClientOriginalName());

            $image->move(public_path('/upload/projects/'), $fileNameImage);

            ProjectImage::create([
                'project_id' => $project->id,
                'image' => $fileNameImage
            ]);
        }

        alert()->success('تصویر مورد نظر با موفقیت اضافه شد', 'باتشکر');
        return redirect()->back();
    }

    public function logo(Request $request, Project $project)
    {

        $request->validate([
            'logo_image' => 'required|image|max:500',
        ]);

        $fileNameLogoImage = generateFileName($request->logo_image->getClientOriginalName());
        $request->logo_image->move(public_path('/upload/projects/'), $fileNameLogoImage);
        deleteFile($project->logo_image);
        $project->update([
            'logo_image' => $fileNameLogoImage
        ]);

        alert()->success('لوگو با موفقیت تغییر یافت', 'باتشکر');
        return redirect()->back();
    }

    public function customer(Request $request, Project $project)
    {
        $request->validate([
            'customer_image' => 'required|image|max:500',
        ]);

        $fileNamecustomerImage = generateFileName($request->customer_image->getClientOriginalName());
        $request->customer_image->move(public_path('/upload/projects/'), $fileNamecustomerImage);
        deleteFile($project->customer_image);
        $project->update([
            'customer_image' => $fileNamecustomerImage
        ]);

        alert()->success('تصویر رضایت مشتری با موفقیت تغییر یافت', 'باتشکر');
        return redirect()->back();
    }
}
