<?php

namespace App\Http\Requests\auth;
use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'name'     =>'required|string',
            'email'    =>'required|email|unique:users',
            'phone'   => 'required|numeric|unique:users',
            'password' =>'required|string',
            'address' =>'required|string',
            'image' =>'required|file|mimes:jpg,jpeg,png|max:200',
        ];
    }
}
