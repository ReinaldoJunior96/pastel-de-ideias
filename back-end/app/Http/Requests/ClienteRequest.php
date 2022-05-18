<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* Como não tem validação deixei liberado para todos realiazarem a request*/
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
            'nome' => 'required',
            'email' => 'required|unique:clientes,email',
            'telefone' => 'max:13',
            'dataNascimento' => 'required',
            'endereco' => 'required|max:100',
            'complemento' => 'max:50',
            'bairro' => 'required',
            'cep' => 'max:10',
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

            'email.required' => 'Este campos é obrigatório',
            'email.unique' => 'E-mail já cadastrado',

            'telefone.max' => 'Máximo 13 caracteres',

            'dataNascimento.required' => 'Este campos é obrigatório',

            'endereco.required' => 'Este campos é obrigatório',
            'endereco.max' => 'Máximo 100 caracteres',

            'complemento.max' => 'Máximo 50 caracteres',

            'bairro.required' => 'Este campos é obrigatório',

            'cep.required' => 'Este campos é obrigatório',
            'cep.max' => 'Máximo 10 caracteres',
        ];
    }
}
