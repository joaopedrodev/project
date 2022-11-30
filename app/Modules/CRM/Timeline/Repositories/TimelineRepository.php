<?php

namespace App\Modules\CRM\Timeline\Repositories;

use App\Modules\CRM\Timeline\Models\TimelineModel;
use App\Modules\CRM\Timeline\Requests\TimelineRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimelineRepository
{
    public function save(TimelineRequest $request)
    {
        return TimelineModel::create($request->all());
    }
    public function data($id)
    {
        return TimelineModel::findOrFail($id);
    }
    public function update(TimelineRequest $request, $id)
    {
        $time = TimelineModel::findOrFail($id);
        $time->update($request->all());
        return $time;
    }
    public function delete($id)
    {
        $time = TimelineModel::findOrFail($id);
        $time->dttDeleted = Carbon::now();
        $time->save();
        return ['success' => true];
    }
}
