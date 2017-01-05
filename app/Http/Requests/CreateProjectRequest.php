<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProjectRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:projects,name',
            'thumbnail' => 'image|dimensions:min_width=261,min_height=98'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '项目名不可为空！',
            'name.unique' => '项目已存在！',
            'thumbnail.image' => '文件格式必须是图片！',
            'thumbnail.dimensions' => '图片尺寸过小！',
        ];
    }
}
