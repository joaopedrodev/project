<?php

namespace App\Modules\CRM\Lead\Repositories;

use App\Modules\CRM\Lead\Models\LeadModel;
use App\Modules\CRM\Lead\Requests\LeadRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeadRepository
{
    public function save(LeadRequest $request)
    {
        $lead =  LeadModel::create($request->all());

        return response()->json([
            'data' => [
                'msg' => 'Lead cadastrado com sucesso!'
            ]
        ], 200);
    }
    public function data($id)
    {
        return LeadModel::findOrFail($id);
    }
    public function update(LeadRequest $request, $id)
    {
        $lead = LeadModel::findOrFail($id);
        $lead->update($request->all());
        return $lead;
    }
    public function delete($id)
    {
        $lead = leadModel::findOrFail($id);
        $lead->dttDeleted = Carbon::now();
        $lead->save();
        return ['success' => true];
    }
}
