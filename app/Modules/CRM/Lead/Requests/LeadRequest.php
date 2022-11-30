<?php


namespace App\Modules\CRM\Lead\Requests;

use App\Core\Requests\AbstractRequest;

class LeadRequest extends AbstractRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'chrName' => 'required|max:255',
            'chrEmail' => 'required|',
            'chrPhone' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'chrName' => 'Nome da pessoa',
            'chrEmail' => 'Email do usuário',
            'chrPhone' =>  'Telefone '
        ];
    }
}
