<?php

namespace App\Http\Requests\Admin\SlideShow;

use Illuminate\Foundation\Http\FormRequest;

class SlideShowUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'url' => 'required',
            'title' => 'required|max:250',
            'description' => 'required',
            'interval' => 'required',
            'link_text' => 'required',
            'link' => 'required',
            'order' => 'required',
            'is_active' => 'required'
        ];
    }
}
