<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'], // Telefon alanı isteğe bağlı
            'country' => ['nullable', 'string', 'max:255'], // Ülke alanı isteğe bağlı
            'city' => ['nullable', 'string', 'max:255'], // Şehir alanı isteğe bağlı
            'address' => ['nullable', 'string', 'max:255'], // Adres alanı isteğe bağlı
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->user()->id), // Mevcut kullanıcı hariç
            ],
            'password' => ['nullable', 'confirmed', 'min:8'], // Şifre zorunlu değil
        ];
    }
}
