<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'nama' => 'required|max:100',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'foto' => in_array($this->method(), ['POST']) ? 'required|max:1024' : 'nullable|max:1024',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'nama.required' => 'Input nama harus di isi',
            'deskripsi.required' => 'Input deskripsi harus di isi',
            'harga.required' => 'Input harga harus di isi',
            'harga.numeric' => 'Input harga harus berupa angka',
            'foto.required' => 'Input foto harus di isi',
            'foto.max' => 'Size file dari foto tidak boleh melebihi dari 1mb',
        ];
    }
}
