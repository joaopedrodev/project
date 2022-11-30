<?php

namespace App\Modules\CRM\CardProgress\Repositories;


use App\Modules\CRM\CardProgress\Models\CardProgressModel;
use App\Modules\CRM\CardProgress\Requests\CardProgressRequest;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CardProgressRepository
{
    public function save(CardProgressRequest $request)
    {
        $model =  CardProgressModel::create($request->all());
        $progress = new CardProgressModel();
        $progress->fkCard = $model->getKey();
        $progress->dttRegister = Carbon::now();

        return $progress;
    }
    public function data($id)
    {
        return CardProgressModel::findOrFail($id);
    }
    public function update(CardProgressRequest $request, $id)
    {
        $progress = CardProgressModel::findOrFail($id);
        $progress->update($request->all());
        return $progress;
    }
    public function delete($id)
    {
        $progress = CardProgressModel::findOrFail($id);
        $progress->dttDeleted = Carbon::now();
        $progress->save();
        return ['success' => true];
    }
}
