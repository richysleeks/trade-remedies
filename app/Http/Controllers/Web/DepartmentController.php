<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use App\Department;

class DepartmentController extends Controller
{
	// function __construct()
 //    {
 //        $this->middleware('permission:browse_department', ['only' => 'index']); 
 //        $this->middleware('permission:add_department', ['only' => 'create']);
 //        $this->middleware('permission:edit_department', ['only' => 'show']);
 //        $this->middleware('permission:delete_department', ['only' => 'destroy']);
 //    }

    public function index()
    {
        $departments = Department::latest()->paginate(5);

        return view('pages.department.list', compact('departments'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:departments,name'
        ];

        $customMessages = [
            'name.required' => 'Please provide the department\'s name.',
            'name.unique' => 'Department name already exist.',
        ];

        $this->validate($request, $rules, $customMessages); 

        Department::create([
            'name' => $request->name,
            'created_by' => auth()->user()->id,
        ]);

        notify()->success("Successfully created!");

        return redirect()->route('departments.index');
    }

    public function show(Department $department)
    {
        $departments = Department::latest()->paginate(5);

        return view('pages.department.edit', compact('department', 'departments'));
    }

    public function update(Request $request, Department $department)
    {
        $rules = [
            'name' => [
                'required',
                Rule::unique('departments')->ignore($department->id),
            ],
        ];

        $customMessages = [
            'name.required' => 'Please provide the department\'s name.',
            'name.unique' => 'Department name already exist.',
        ];

        $this->validate($request, $rules, $customMessages);

        $department->update([
            'name' => $request->name,
        ]);

        notify()->success("Successfully Updated!");

        return redirect()->route('departments.index');
    }

    public function destroy(Department $department)
    {
        if($department->staff->count() > 0){
            notify()->warning("Can't be deleted, staffs exist in department.");
            return redirect()->route('departments.index');
        }else{
            $department->delete();

            notify()->success("Successfully Deleted!");
            return redirect()->route('departments.index');
        }
    }
}
