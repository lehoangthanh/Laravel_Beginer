<?php

namespace App\Http\Requests\User;

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
            'password' => "required|min:6|regex:/[A-Z]/|regex:/[0-9]/",
            'name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ":attribute bắt buộc phải nhập",
            'min' => ":attribute không được nhỏ hơn :min ký tự",
            'regex' => ":attribute phải chứa ít nhất một số và 1 ký tự viết hoa"
        ];
    }
}
