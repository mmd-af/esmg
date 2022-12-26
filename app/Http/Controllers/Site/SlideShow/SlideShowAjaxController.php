<?php

namespace App\Http\Controllers\Site\SlideShow;

use App\Http\Controllers\Controller;
use App\Repositories\Site\SlideShowRepository;
use Illuminate\Http\Request;

class SlideShowAjaxController extends Controller
{
    protected $slideShowRepository;

    public function __construct(SlideShowRepository $slideShowRepository)
    {
        $this->slideShowRepository = $slideShowRepository;
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            return $this->slideShowRepository->getData();
        }
    }
}
