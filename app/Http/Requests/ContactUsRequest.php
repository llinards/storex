<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\URL;

class ContactUsRequest extends FormRequest
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
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string'],
            'selected-product-variant' => ['nullable', 'string'],
            'agrees-for-data-processing' => ['accepted'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'fullname.required' => __('Lūdzu ievadiet savu vārdu un uzvārdu.'),
            'email.required' => __('Lūdzu ievadiet savu e-pasta adresi.'),
            'email.email' => __('Lūdzu ievadiet derīgu e-pasta adresi.'),
            'phone.required' => __('Lūdzu ievadiet savu telefona numuru.'),
            'company.string' => __('Lūdzu ievadiet uzņēmuma nosaukumu.'),
            'message.string' => __('Lūdzu ievadiet ziņojumu.'),
            'agrees-for-data-processing.accepted' => __('Lūdzu apstipriniet, ka piekrītat datu uzglabāšanai un apstrādei.'),
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            redirect($this->redirectTo())->withErrors($validator)
        );
    }

    public function redirectTo(): string
    {
        return URL::previous().'#contact-us-form';
    }
}
