<?php

namespace App\Http\Controllers\Site\Category;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Repositories\Site\CategoryRepository;

class CategoryController extends Controller
{

    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->CategoryRepository = $categoryRepository;
    }

    public function show($category)
    {
        $category = $this->CategoryRepository->getByCategory($category);
        return view('site.categories.index', compact('category'));
    }

}
