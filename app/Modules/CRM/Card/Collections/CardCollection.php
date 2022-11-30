<?php

namespace App\Modules\CRM\Card\Collections;

use App\Modules\CRM\Card\Models\CardModel;

class CardCollection
{
    public function collect()
    {
        return  CardModel::whereNull('dttDeleted')->get();;
    }
}
