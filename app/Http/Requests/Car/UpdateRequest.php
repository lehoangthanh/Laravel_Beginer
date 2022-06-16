<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => "required",
            'brand' => "required",
            'price' => "required",
            'launched_year' => "required|digits:4|before:2023"
        ];
    }

    public function messages()
    {
        return [
            'required' => ":attribute bắt buộc phải nhập",
            'digits' => ":attribute chỉ được nhập 4 chữ số",
            'before' => "Năm ra mắt phải <= năm hiện tại"
        ];
    }
}
