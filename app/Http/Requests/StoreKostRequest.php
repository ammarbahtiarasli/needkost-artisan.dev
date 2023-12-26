<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreKostRequest extends FormRequest
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
            'nama' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'harga_perbulan' => 'required',
            'kamar_tersedia' => 'required',
            'check' => 'required',
        ];
    }
}
