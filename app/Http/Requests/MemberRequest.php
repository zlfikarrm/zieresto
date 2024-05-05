<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'nama_pelanggan' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ];
    }

    public function massages()
    {
        return [
            'nama_member.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
        ];
    }
}
