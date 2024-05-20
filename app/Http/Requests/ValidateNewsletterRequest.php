<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateNewsletterRequest extends FormRequest
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
            'newsletterEmail' => 'required|email|unique:newsletter,email|max:255',
        ];
    }

    public function messages()
    {
        return [
            'newsletterEmail.required' => 'The email field is required.....',
            'newsletterEmail.email' => 'The email must be a valid email address.',
            'newsletterEmail.unique' => 'The email has already been taken.',
            'newsletterEmail.max' => 'The email may not be greater than :max characters.',
            // // Define your custom error messages here
        ];
    }
}
