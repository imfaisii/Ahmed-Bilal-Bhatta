<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewInvestorRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required|max:11|min:11',
            'cnic' => 'required|max:13|min:13|unique:investors,cnic',
            'profile_image'  => 'mimes:jpg,png,jpeg,gif|max:2048',
            'address' => 'string'
        ];
    }
}
