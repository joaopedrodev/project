<?php

namespace App\Modules\CRM\Lead\Collections;

use App\Modules\CRM\Lead\Models\LeadModel;

class LeadCollection
{
    public function collect()
    {
        return  LeadModel::whereNull('dttDeleted')->get();
    }
}
