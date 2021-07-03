<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DepartmentController extends Controller
{
    public function index()
    {
        $page = 'index';
        $data = Department::get();
        return view('backend.department.index', compact('page', 'data'));
    }

    public function create()
    {
        $page = 'create';
        $data = '';
        return view('backend.department.index', compact('page', 'data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191'
        ]);

        $department = new Department();
        $department->name = $request->name;
        $department->slug = str_replace(' ', '-', strtolower($request->name));
        $department->save();
        return redirect('/department/index')->with('success', 'Department has been successful inserted');
    }

    public function edit($id, $slug)
    {
        $page = 'edit';
        $data = Department::find($id);
        return view('backend.department.index', compact('page', 'data'));
    }

    public function update(Request $request, Department $department)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191'
        ]);

        $department->name = $request->name;
        $department->slug = str_replace(' ', '-', strtolower($request->name));
        $department->save();
        return redirect('/department/index')->with('success', 'Department has been successful updated');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->back()->with('success', 'Department has been successful deleted');
    }
}
