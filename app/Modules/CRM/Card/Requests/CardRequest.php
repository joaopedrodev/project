<?php


namespace App\Modules\CRM\Card\Requests;

use App\Core\Requests\AbstractRequest;

class CardRequest extends AbstractRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'chrTimeline' => 'required|max:255',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'chrTimeline' => 'Nome da pessoa',
        ];
    }
}
