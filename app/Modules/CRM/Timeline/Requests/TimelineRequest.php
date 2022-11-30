<?php


namespace App\Modules\CRM\Timeline\Requests;

use App\Core\Requests\AbstractRequest;

class TimelineRequest extends AbstractRequest
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
            'fkDepartment' => 'required|integer'
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'chrTimeline' => 'Nome da pessoa',
            'fkDepartment' => 'Departamento'
        ];
    }
}
