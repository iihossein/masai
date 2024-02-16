<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

            'fa_name' => ['required', 'string', 'max:100'],
            'en_name' => ['string', 'max:100'],
            'description' => ['string'],
            'brand_id' => ['required', 'integer'],
            'category' => ['required', 'integer'],
            'price' => ['required', 'digits_between:5,16'],
            'guarantee' => ['string', 'max:200'],
            'marketable' => ['integer', 'digits:1'],
            'stock' => ['required', 'intiger'],

        ];
    }
}
