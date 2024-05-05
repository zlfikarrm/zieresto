<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StokRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'jumlah' => 'required',
            'menu_id' => 'required',
        ];
    }

    public function massages()
    {
        return [
            'jumlah.required' => 'Jumlah Stok harus diisi.',
            'menu_id.required' => 'Menu Id harus diisi.'
        ];
    }
}
