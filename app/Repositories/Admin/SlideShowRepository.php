<?php

namespace App\Repositories\Admin;

use App\Models\SlideShow\SlideShow;
use App\Models\Image\Image;
use Illuminate\Support\Str;

class SlideShowRepository extends BaseRepository
{
    public function getAll()
    {
        return SlideShow::query()
            ->select([
                'id',
                'title',
                'slug',
                'description',
                'order',
                'is_active'
            ])
            ->withoutGlobalScope('active')
            ->orderBy('order')
            ->paginate(10);
    }

    public function getSlideShow($slideShow)
    {
        return SlideShow::query()
            ->select([
                'id',
                'title',
                'slug',
                'description',
                'interval',
                'link_text',
                'link',
                'order',
                'is_active'
            ])
            ->withoutGlobalScope('active')
            ->where('id', $slideShow)
            ->first();
    }

    public function store($request)
    {
        $item = new SlideShow();
        $item->title = $request->input('title');
        $item->slug = Str::slug($request->input('slug'));
        $item->description = $request->input('description');
        $item->interval = $request->input('interval');
        $item->link_text = $request->input('link_text');
        $item->link = $request->input('link');
        $item->order = $request->input('order');
        $item->is_active = $request->input('is_active');
        $item->save();
        $image = new Image();
        $image->url = $request->input('url');
        $item->images()->save($image);
        alert()->success('اسلاید مورد نظر با موفقیت ثبت شد', 'باتشکر');
        return $item;
    }

    public function update($request, $slideShow)
    {
        $slideShow->title = $request->input('title');
        $slideShow->description = $request->input('description');
        $slideShow->interval = $request->input('interval');
        $slideShow->link_text = $request->input('link_text');
        $slideShow->link = $request->input('link');
        $slideShow->order = $request->input('order');
        $slideShow->is_active = $request->input('is_active');
        $slideShow->save();
        $slideShow->images()->update(['url' => $request->input('url')]);
        alert()->success('اسلاید مورد نظر با موفقیت ویرایش شد', 'باتشکر');
    }

    public function destroy($slideShow)
    {
        $slideShow->delete();
        alert()->success('اسلاید مورد نظر با موفقیت حذف شد', 'باتشکر');

    }
}
