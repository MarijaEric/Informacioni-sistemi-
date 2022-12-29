<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => ['required', 'min:3'],
            'company_address' => ['required', 'min:3'],
            'grad' => ['required', 'min:3'],
            'company_post_code' => ['required', 'min:3'],
            'company_mb' => ['required', 'min:3'],
            'company_pib' => ['required', 'min:3'],

        ];
    }
}
