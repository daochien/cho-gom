<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class CreateProduct extends FormRequest
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
        $rules = [
            'name' => 'required|max:191',
            'code' => 'required|max:191',
            'price' => 'required|numeric|min:1000|max:10000000',
            'weight' => 'required|numeric|min:100|max:10000',
            'avatars' => 'required',
            'images' => 'required',
            'status' => 'required',
            'cate_ids' => 'required'
        ];
        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {

        $error = $validator->errors()->first();

        throw new HttpResponseException(response()->json(
        [
            'errors' => $validator->errors(),
            'message' => $error,
            'status' => false,
        ], 200));
    }
}