<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'product_title' => 'required|string|max:255',
            'product_price' => 'nullable|numeric|min:0',
            'product_description' => 'required|string',
            'available_length' => 'nullable|string',
            'available_width' => 'nullable|string',
            'available_height' => 'nullable|string',
            'available_area' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => __('Nav izvēlētā kategorija.'),
            'category_id.exists' => __('Izvēlētā kategorija neeksistē.'),
            'product_title.required' => __('Produkta nosaukums ir obligāts.'),
            'product_title.string' => __('Produkta nosaukums jābūt teksta tipam.'),
            'product_title.max' => __('Produkta nosaukums nevar būt garāks par 255 simboliem.'),
            'product_price.numeric' => __('Produkta cena jābūt skaitļa tipam.'),
            'product_price.min' => __('Produkta cena nevar būt mazāka par 0.'),
            'product_description.required' => __('Produkta apraksts ir obligāts.'),
            'product_description.string' => __('Produkta apraksts jābūt teksta tipam.'),
            'available_length.string' => __('Produkta garums jābūt teksta tipam.'),
            'available_width.string' => __('Produkta platums jābūt teksta tipam.'),
            'available_height.string' => __('Produkta augstums jābūt teksta tipam.'),
            'available_area.string' => __('Produkta laukums jābūt teksta tipam.'),
        ];
    }
}
