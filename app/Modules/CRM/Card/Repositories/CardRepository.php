<?php

namespace App\Modules\CRM\Card\Repositories;

use App\Modules\CRM\Card\Models\CardModel;
use App\Modules\CRM\Card\Requests\CardRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CardRepository
{
    public function save(CardRequest $request)
    {
        $model =  CardModel::create($request->all());
        $progress = new CardProgressModel();
        $progress->fkCard = $model->getKey();
        $progress->dttRegister = Carbon::now();
        return response()->json($progress);
    }
    public function data($id)
    {
        return CardModel::findOrFail($id);
    }
    public function update(CardRequest $request, $id)
    {
        $card = CardModel::findOrFail($id);
        $card->update($request->all());
        return response()->json($card);
    }
    public function delete($id)
    {
        $card = CardModel::findOrFail($id);
        $card->dttDeleted = Carbon::now();
        $card->save();
        return response()->json(['data' => ['msg' => 'Card excluido com sucesso!']]);
    }
}
