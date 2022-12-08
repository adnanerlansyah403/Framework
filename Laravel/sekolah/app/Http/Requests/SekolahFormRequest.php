<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SekolahFormRequest extends FormRequest
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
        $email_rule = 'required|email:rfc,dns|max:255|unique:sekolah,email';
        $user_id = request($this->id);
        if (!is_null($this->id)) {
            $email_rule .= ",{$this->id}";
        }
        $rules = [
            'name' => 'required',
            'email' => $email_rule,
            'tingkatan' => 'required|max:50',
            'alamat' => 'max:255',
            'no_telp' => 'max:50',
            'nis' => 'required|max:50',
            'status' => 'required',
            'deskripsi' => 'nullable'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Input nama harus di isi',
            'email.required' => 'Input email harus di isi',
            'tingkatan.required' => 'Input tingkatna harus di isi',
            'nis.required' => 'Input nis harus di isi',
            'status.required' => 'Input status harus di isi',
            'nis.max' => 'Input No Nis tidak boleh memiliki karakter lebih dari 50',
            'tingkatan.max' => 'Input Tingkatan tidak boleh memiliki karakter lebih dari 50',
            'no_telp.max' => 'Input No Telepon tidak boleh memiliki karakter lebih dari 50',
            'alamat.max' => 'Input Alamat tidak boleh memiliki karakter lebih dari 50',
        ];
    }
}
