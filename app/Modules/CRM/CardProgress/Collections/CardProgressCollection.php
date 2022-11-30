<?php

namespace App\Modules\CRM\CardProgress\Collections;

use App\Modules\CRM\CardProgress\Models\CardProgressModel;

class CardProgressCollection
{
    public function collect()
    {
        return  CardProgressModel::whereNull('dttDeleted')->get();;
    }
}
