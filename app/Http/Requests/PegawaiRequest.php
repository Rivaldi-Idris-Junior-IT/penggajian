<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
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
            'nik_pegawai' => 'required|max:11',
            'nama_pegawai' => 'required|max:255',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'agama' => 'required'
        ];
    }
}
