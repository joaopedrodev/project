<?php

namespace App\Modules\CRM\Timeline\Collections;

use App\Modules\CRM\Timeline\Models\TimelineModel;

class TimelineCollection
{
    public function collect()
    {
        return  TimelineModel::whereNull('dttDeleted')->get();;
    }
}
