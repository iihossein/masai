<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            
                'first_name' => ['string','max:50'],
                'last_name' => ['string','max:50'],
                'mobile' => [
                    'required',
                    'digits:11',
                    Rule::unique(User::class),
                ],
                'national_code' => [
                    'digits:11',
                    Rule::unique(User::class),
                ],
                'address' => ['string','max:200'],
                'postal_code' => ['integer','digits_between:8,16'],
                // 'birthday' => ''
                'bank_cart' => ['integer','digits:16']
            
        ];
    }
}
