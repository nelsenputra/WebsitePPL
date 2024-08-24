<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProyekRequest extends FormRequest
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
        return [
            'noKelompok' => ['required', 'numeric'],
            'kelas' => ['required'],
            'semester' => ['required'],
            'anggota' => ['required'],
            'namaPO' => ['required'],
            'topik' => ['required', 'max:1000'],
            'deskripsi' => ['required', 'max:5000'],
            'nmAsisten' => ['required'],
            'institusi' => ['required'],
            'tahun' => ['required', 'numeric'],
            'nmPengaju' => ['required'],
            'nimPengaju' => ['required'],
            'emailPengaju' => ['required'],
            'file.*' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ];
    }
}
