<?php

namespace App\Modules\CRM\Department\Repositories;

use App\Modules\CRM\Department\Models\DepartmentModel;
use App\Modules\CRM\Department\Requests\DepartmentRequest;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DepartmentRepository
{

    public function save(DepartmentRequest $request)
    {
        return DepartmentModel::create($request->all());
    }
    public function data($id)
    {
        return DepartmentModel::findOrFail($id);
    }
    public function update(DepartmentRequest $request, $id)
    {
        $department = DepartmentModel::findOrFail($id);
        $department->update($request->all());
        return $department;
    }
    public function delete($id)
    {
        $department = DepartmentModel::findOrFail($id);
        $department->dttDeleted = Carbon::now();
        $department->save();
        return ['success' => true];
    }
}
