<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'jenis_id' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',
        ];
    }

    public function massages()
    {
        return [
            'nama_menu.required' => 'Data nama menu harus diisi.',
            'harga.required' => 'Harga menu harus diisi.'
        ];
    }
}
