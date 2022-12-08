<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
        $email_rule = 'required|email|max:255|unique:users,email';
        $user_id = request($this->id);
        if (!is_null($this->id)) {
            $email_rule .= ",{$this->id}";
        }
        $rules = [
            'name' => 'required|max:50',
            'email' => $email_rule,
            'password' => 'max:255',
            'tempat_lahir' => 'max:50|required',
            'tanggal_lahir' => 'required|max:50|date',
            'tingkatan' => 'required|max:30',
            'nisn' => 'required|max:50',
            'alamat' => 'max:255',
            'gender' => 'required|max:50',
            'keterangan' => 'max:50',
            'role' => 'required|max:50',
            'id_sekolah' => 'required|max:50',
        ];

        if(in_array($this->method(), ['POST'])) {
            $rules['password'] = [
                'required',
                'max:255'
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama harus di isi',
            'email.required' => 'Email harus di isi',
            'tanggal_lahir.required' => 'Tanggal Lahir harus di isi',
            'tingkatan.required' => 'Tingkatan harus di isi',
            'nisn.required' => 'Nisn harus di isi',
            'gender.required' => 'Gender harus di isi',
            'role.required' => 'Role harus di isi',
            'id_sekolah.required' => 'Sekolah harus di isi',
        ];
    }


}
