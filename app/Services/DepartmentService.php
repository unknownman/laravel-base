<?php

namespace App\Services;

use App\Http\Requests\StoreDepartmentRequest;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;

class DepartmentService
{
    static function store(StoreDepartmentRequest $request)
    {
        $department = new Department();
        $department->title = $request->title;
        $department->description = $request->description;
        $department->department_id = $request->department_id && NULL;
        $department->user_id = $request->user_id || Auth::id();
        $department->save();


        return $department;
    }
}
