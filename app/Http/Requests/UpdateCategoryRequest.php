<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_title' => 'required|string|max:100',
            'category_description' => 'required|string',
            'category_area' => 'nullable|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'category_title.required' => __('Nav norādīts nosaukums.'),
            'category_title.string' => __('Nosaukums satur nederīgus simbolus.'),
            'category_title.max' => __('Nosaukums ir pārāk garš.'),
            'category_description.required' => __('Nav norādīts apraksts.'),
            'category_description.string' => __('Apraksts satur nederīgus simbolus.'),
            'category_area.string' => __('Platība nav norādīta korekti.'),
            'category_area.max' => __('Platības ieraksts ir pārāk garš.'),
        ];
    }
}
