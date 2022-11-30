<?php

namespace App\Modules\CRM\Department\Collections;

use App\Modules\CRM\Department\Models\DepartmentModel;

class DepartmentCollection
{
    public function collect()
    {
        return  DepartmentModel::whereNull('dttDeleted')->get(); //whereNull retorna itens da
                                                                 // coleção onde a chave  fornecida é null
    }
}
