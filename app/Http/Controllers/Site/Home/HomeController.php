<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Repositories\Site\HomeRepository;

class HomeController extends Controller
{

    protected $HomeRepository;

    public function __construct(HomeRepository $HomeRepository)
    {
        $this->HomeRepository = $HomeRepository;
    }

    public function homeIndex()
    {
        $slideShows = $this->HomeRepository->getSlideShow();
        $projects= Project::latest()->paginate(4);
        return view('site.index', compact('slideShows','projects'));
    }

//    public function aboutus()
//    {
//        $services = $this->HomeRepository->getServices();
//        $this->HomeRepository->getHomeSeoTools();
//        $getJsonLd = $this->HomeRepository->getAboutJsonLd();
//        return view('site.pages.about', compact('getJsonLd','services'));
//    }
}
