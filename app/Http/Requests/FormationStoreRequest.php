<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class FormationStoreRequest extends FormRequest
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
            'nom' => 'required|string',
            'description' => 'required|string',
            'prix' => 'required|numeric|between:0,99999.99',
            'picture' => 'required|image'
        ];
    }
}
