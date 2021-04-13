<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ApiCalculationsRequest extends FormRequest
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
        $rules = [];
        $types = [];

        foreach(config('calculation-types') as $type) {
            $types[] = $type['type'];
        }
        $rules['type'] = ['required', Rule::in($types)];

        if($this->request->get('type') === 'find-primes' || $this->request->get('type') === 'get-first-and-last-prime') {

            $rules = [
                'number_1' => 'required|integer|digits_between:1,10000',
                'number_2' => 'required|integer|digits_between:1,10000'
            ];
        } else {
            $rules = [
                'number_1' => 'required|numeric|max:10000',
                'number_2' => 'required|numeric|max:10000'
            ];
        }

        return $rules;

    }
}
