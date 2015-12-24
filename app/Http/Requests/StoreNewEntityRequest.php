<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreNewEntityRequest extends Request
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
            'family_name'   => 'required',
            'given_name'    => 'required',
            'email'         => 'required',
            'kind_id'       => 'required'
        ];
    }

    public function messages()
    {
        return [
            'family_name.required'      => 'Family Name is required',
            'given_name.required'       => 'Given Name is required',
            'email.required'            => 'Email is required',
            'kind_id.required'          => 'You must select a kind'
        ];
    }
}
