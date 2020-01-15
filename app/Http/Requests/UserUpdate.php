<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:30|alpha_spaces',
            'lastname' => 'required|min:2|max:30|alpha_spaces',
            'email' => [
                'required',
                'min:2',
                Rule::unique('users')->ignore(Auth()->user()->id),
            ],
            'dni' => [
                'required',
                'numeric',
                Rule::unique('users')->ignore(Auth()->user()->id)
            ],
        ];
        // 'required|min:2|email|unique:users,email',
    }
}
