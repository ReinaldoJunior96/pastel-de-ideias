<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PedidoRequest extends FormRequest
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
            'codCliente' => 'required|numeric',
            'codProduto' => 'required|numeric',
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
            'codCliente.required' => 'Este campos é obrigatório',
            'codCliente.numeric' => 'Este campo aceita apenas números',

            'codProduto.required' => 'Este campos é obrigatório',
            'codProduto.numeric' => 'Este campo aceita apenas números',
        ];
    }
}
