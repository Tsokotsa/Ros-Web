<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'The name field is mandatory',
            'email.required' => 'The email field is mandatory',
            'subject.required' => 'The subject field is mandatory',
            'message.required' => 'The message field is mandatory',
            // // Define your custom error messages here
        ];
    }
}
