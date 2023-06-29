<?php

namespace App\Http\Requests;

use App\Helpers\File;
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:225',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric|lt:price',
            'quantity' => 'required|numeric',
            'meta' => 'nullable',
            'description' => 'nullable',
            'images' => 'required',
        ];
    }

    public function data()
    {
        $validated = $this->validated();

        if (collect($this->images)->isNotEmpty()) {
            unset($validated['images']);
            collect($this->images)->each(function ($image) use (&$validated) {
                $image['src'] = File::uploadAndGetSecurePath($image['src'], config('cloudinary.folders.products'));
                $validated['images'][] = $image;
            });
        }

        return $validated;
    }
}
