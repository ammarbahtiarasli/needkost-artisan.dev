<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRiwayatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kost_id' => ['required', 'exists:kosts,id'],
            'user_id' => ['required', 'exists:users,id'],
            'durasi' => ['required', 'integer'],
            'status' => ['required', 'in:pending,success,failed'],
        ];
    }
}
