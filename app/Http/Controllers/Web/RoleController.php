<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:browse_administrator_roles', ['only' => 'index']); 
    //     $this->middleware('permission:add_administrator_roles', ['only' => 'create']);
    //     $this->middleware('permission:edit_administrator_roles', ['only' => 'show']);
    //     $this->middleware('permission:delete_administrator_roles', ['only' => 'destroy']);
    // }

    public function index()
    {
        $roles = Role::paginate(10);

        return view('pages.role.list', compact('roles'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:roles,name',
            'display_name' => 'required|unique:roles,display_name',
        ];

        $customMessages = [
            'name.required' => 'Please provide the role\'s name.',
            'name.unique' => 'Role name already exist.',
            'display_name.required' => 'Please provide the role\'s display name.',
            'display_name.unique' => 'Role display name already exist.',
        ];

        $this->validate($request, $rules, $customMessages); 

        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'web',
            'display_name' => $request->display_name,
            'created_by' => auth()->user()->id,
        ]);

        $role->permissions()->sync($request->input('permissions', []));

        notify()->success("Successfully created!","","bottomRight");

        return redirect()->route('role');
    }

    public function show(Role $role)
    {
        $roles = Role::paginate(10);

        return view('pages.role.edit', compact('role', 'roles'));
    }

    public function update(Request $request, Role $role)
    {
        $rules = [
            'name' => [
                'required',
                Rule::unique('roles')->ignore($role->id),
            ],
            'display_name' => [
                'required',
                Rule::unique('roles')->ignore($role->id),
            ],
        ];

        $customMessages = [
            'name.required' => 'Please provide the role\'s name.',
            'name.unique' => 'Role name already exist.',
            'display_name.required' => 'Please provide the role\'s display name.',
            'display_name.unique' => 'Role display name already exist.',
        ];

        $this->validate($request, $rules, $customMessages);

        $role->update([
            'name' => $request->name,
            'display_name' => $request->display_name,
        ]);

        $role->permissions()->sync($request->input('permissions', []));

        notify()->success("Successfully Updated!","","bottomRight");

        return redirect()->route('role');
    }

    public function destroy(Role $role)
    {
        if($role->users->count() > 0){

            notify()->warning("Can't be deleted, users belong in this role.","","bottomRight");

            return redirect()->back();
        }else{
            $role->delete();

            notify()->success("Successfully Deleted!","","bottomRight");

            return redirect()->back();
        }
    }
}
