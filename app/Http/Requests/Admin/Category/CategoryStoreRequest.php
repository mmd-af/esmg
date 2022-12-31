<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'slug' => ['required'],
            'cat_type' => ['required'],
            'parent_id' => ['required'],
            'url' => ['required'],
            'is_active' => 'required'
        ];
    }
}
