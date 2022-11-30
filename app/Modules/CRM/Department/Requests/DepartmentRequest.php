<?php


namespace App\Modules\CRM\Department\Requests;

use App\Core\Requests\AbstractRequest;

class DepartmentRequest extends AbstractRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'chrDepartment' => 'required|max:255'
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'chrDepartment' => 'Nome do Departamento'
        ];
    }
}
