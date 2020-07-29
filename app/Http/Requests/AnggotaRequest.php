<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnggotaRequest extends FormRequest
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
        // Cek apakah CREATE atau UPDATE
        if ($this->method() == 'PATCH') {
            $nik_rules    = 'required|string|size:5|unique:anggota,nik,' . $this->get('id');
            $telepon_rules = 'sometimes|nullable|numeric|digits_between:10,15|unique:telepon,nomor_telepon,' . $this->get('id') . ',id_anggota';
        } else {
            $nik_rules    = 'required|string|size:5|unique:anggota,nik';
            $telepon_rules = 'sometimes|nullable|numeric|digits_between:10,15|unique:telepon,nomor_telepon';
        }

        return [
            'nik'          => $nik_rules,
            'nama_anggota'    => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'alamat'         =>'required',
            'jenis_kelamin' => 'required|in:L,P',
            'nomor_telepon' => $telepon_rules,
            'foto'          => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:width=150,height:180',
        ];
    }
}
