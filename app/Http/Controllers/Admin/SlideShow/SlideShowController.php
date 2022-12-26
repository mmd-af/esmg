<?php

namespace App\Http\Controllers\Admin\SlideShow;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SlideShow\SlideShowStoreRequest;
use App\Http\Requests\Admin\SlideShow\SlideShowUpdateRequest;
use App\Repositories\Admin\SlideShowRepository;

class SlideShowController extends Controller
{
    protected $slideShowRepository;

    public function __construct(SlideShowRepository $slideShowRepository)
    {
        $this->slideShowRepository = $slideShowRepository;
    }

    public function index()
    {
        $slideShows = $this->slideShowRepository->getAll();
        return view('admin.slideshows.index', compact('slideShows'));
    }

    public function create()
    {
        return view('admin.slideshows.create');
    }

    public function store(SlideShowStoreRequest $request)
    {
        $this->slideShowRepository->store($request);
        return redirect()->route('admin.slideshows.index');
    }

    public function edit($slideShow)
    {
        $slideShow = $this->slideShowRepository->getSlideShow($slideShow);
        return view('admin.slideshows.edit', compact('slideShow'));
    }

    public function update(SlideShowUpdateRequest $request, $slideShow)
    {
        $slideShow = $this->slideShowRepository->getSlideShow($slideShow);
        $this->slideShowRepository->update($request, $slideShow);
        return redirect()->route('admin.slideshows.index');
    }

    public function destroy($slideShow)
    {
        $slideShow = $this->slideShowRepository->getSlideShow($slideShow);
        $this->slideShowRepository->destroy($slideShow);
        return redirect()->route('admin.slideshows.index');
    }
}
