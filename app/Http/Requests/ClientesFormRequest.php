<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class ClientesFormRequest extends FormRequest
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
            //
            'Nome'=>'required|max:100',
            'TipoCliente'=>'required|max:1',
            'CnpjCpf'=>'required|max:15',
            'Email'=>'required|max:100',
            'TelefoneFixo'=>'required|max:15',
            'TelefoneComercial'=>'required|max:15',
            'TelefoneCelular'=>'required|max:15',
            'Endereco'=>'max:45',
            'Numero'=>'max:15',
            'Bairro'=>'max:45',
            'Cidade'=>'max:50',
            'UF'=>'max:2',
            'Complemento'=>'max:45',
            'cep'=>'max:8'
            
            
        ];
    }
}
