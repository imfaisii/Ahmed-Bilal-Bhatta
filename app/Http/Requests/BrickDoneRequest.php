<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrickDoneRequest extends FormRequest
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
            'bricks_done' => 'required|numeric',
            'rate' => 'required|numeric',
            'round_number' => 'required|numeric',
            'season' => 'string',
            'user_id' => 'required|exists:workers,id'
        ];
    }
}
