<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProdutoRequest extends FormRequest
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
            'nome' => 'required|max:100',
            'preco' => 'required|between:0,99.99',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'Error',
            'success' => false,
            'message' => 'Erro de validação',
            'campos' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'nome.required' => 'Este campos é obrigatório',
            'nome.max' => 'O nome do produto deve conter no máximo 100 caracteres',

            'preco.required' => 'Este campos é obrigatório',
            'preco.between' => 'Preço inválido',
        ];
    }
}
