<?php

/*
 * Developed by Milena Mognon
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'rg' => 'required|string|max:255|unique:users',
            'nome' => 'required|min:6',
            'secao_id' => 'required|int',
            
            'password' => 'required|string|min:6:confirmed',
            'confirmacao_senha' => 'required|same:password|min:6'
        ];
    }


    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'secao_id' => 'seção',
           
            'confirmacao_senha' => 'confirmação de senha',
            'password' => 'senha'
        ];
    }
}
