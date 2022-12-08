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
            'name.required' => 'Nama harus di isi',
            'email.required' => 'Email harus di isi',
            'tingkatan.required' => 'Tingkatan harus di isi',
            'nis.required' => 'NIS harus di isi',
            'status.required' => 'Status harus di isi',
        ];
    }
}
