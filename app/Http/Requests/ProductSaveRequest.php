<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class ProductSaveRequest extends FormRequest
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
            'name' => ['required'],
            'price' => [
                'required', 'min:0',
                function ($attribute, $value, $fail) {
                    $formate = str_replace([',', '₹'], '', $value);
                    if (!is_numeric($formate)) {
                        $fail("The {$attribute} must be a valid numeric value.");
                    }
                }
            ],
            'description' => ['nullable'],
            'image' => ['nullable', File::image()]
        ];
    }
}
