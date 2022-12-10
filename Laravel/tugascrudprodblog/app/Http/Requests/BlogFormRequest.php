<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'title' => 'required|max:100',
            'body' => 'required',
            'author_name' => 'required',
            'category' => 'required',
            'thumbnail' => in_array($this->method(), ['POST']) ? 'required|max:1024' : 'nullable|max:1024',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'Input title harus di isi',
            'body.required' => 'Input body harus di isi',
            'category.required' => 'Input category harus di isi',
            'author_name.required' => 'Input Author Name harus di isi',
            'thumbnail.required' => 'Input Foto harus di isi',
            'thumbnail.max' => 'Size file dari foto tidak boleh melebihi dari 1mb',
        ];
    }
}
