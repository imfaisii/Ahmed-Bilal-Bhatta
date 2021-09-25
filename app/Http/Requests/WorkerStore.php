<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerStore extends FormRequest
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
            'wname' => 'required',
            'wphone' => 'required|max:11|min:11',
            'wcnic' => 'required|max:13|min:13|unique:workers,cnic',
            'wimage'  => 'mimes:jpg,png,jpeg,gif|max:2048'
        ];
    }
}
