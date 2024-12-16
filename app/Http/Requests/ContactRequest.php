<?php

namespace App\Http\Requests;

use App\Rules\PhoneRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:100|min:3',
            'subject' => 'required|max:150|min:3',
            'message' => 'required|min:20|max:300',
            'phone' => ['required', new PhoneRule()],
            'email' => 'max:254|email',
        ];
    }
}
