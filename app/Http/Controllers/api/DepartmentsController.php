<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Modules\CRM\Department\Models\DepartmentModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return DepartmentModel::all();
        return  DepartmentModel::whereNull('dttDeleted')->get();
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        DepartmentModel::create($request->all());
    }
    public function show($id)
    {
        return DepartmentModel::findOrFail($id);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $departments = DepartmentModel::findOrFail($id);
        $departments->update($request->all());
    }
    public function destroy($id)
    {
        $departments = DepartmentModel::findOrFail($id);
        $departments->dttDeleted = Carbon::now();
        $departments->save();
    }
}
