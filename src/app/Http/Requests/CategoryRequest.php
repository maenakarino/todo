<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            "name" => ['required', 'string', 'max:10', 'unique:categories'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'カテゴリーを入力してください',
            'name.string' => 'カテゴリーを文字列で入力してください',
            'name.max' => 'カテゴリーを10文字以下で入力してください',
            'name.unique' => 'カテゴリーが既に存在しています',
        ];
    }
}
