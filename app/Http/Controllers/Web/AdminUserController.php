<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminUser;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Events\AdminUserCreated;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
	// function __construct()
 //    {
 //        $this->middleware('permission:browse_administrator', ['only' => 'index']); 
 //        $this->middleware('permission:add_administrator', ['only' => 'create']);
 //        $this->middleware('permission:edit_administrator', ['only' => 'show']);
 //        $this->middleware('permission:delete_administrator', ['only' => 'destroy']);
 //        $this->middleware('permission:read_administrator', ['only' => ['others_profile', 'my_profile']]);
 //        $this->middleware('permission:activate_deactivate_administrator', ['only' => 'active']);
 //        $this->middleware('permission:edit_administrator', ['only' => 'change_photo']);
 //    }

    public function index()
    {
        $admin_users = AdminUser::paginate(10);

        return view('pages.employee.list', compact("admin_users"));
    }

    public function create()
    {
        $roles = Role::all();

        return view('pages.employee.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|phone:AUTO,NG',
            'address' => 'required',
            'role' => 'required',
            'department' => 'required',
            'position' => 'required',
            'employee_id' => 'required',
            'sex' => 'required'
        ];

        $customMessages = [
            'name.required' => 'Please provide the employee\'s name.',
            'email.required' => 'Please provide the employee\'s email.',
            'email.unique' => 'An employee with thesame email already exist.',
            'email.email' => 'Please provide a valid employee email.',
            'phone.required' => 'Please provide the employee\'s mobile number.',
            'phone.phone' => 'Please provide a valid phone number.',
            'address.required' => 'Please provide the employee\'s address.',
            'role.required' => "Please select employee's role",
            'department.required' => 'Please select the employee\'s department.',
            'position.phone' => 'Please select the employee\'s position.',
            'employee_id.required' => 'Please provide the employee\'s ID.',
            'sex.required' => "Please select employee's gender",
        ];

        $this->validate($request, $rules, $customMessages);

        $password = rand(100000, 999999);

		$admin_user = AdminUser::create([
            'department' => $request->department,
            'position' => $request->position,
            'created_by' => auth()->user()->owner->id,
            'employee_id'=> $request->employee_id,
            'sex'=> $request->sex,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
            'typeable_id' => $admin_user->id,
			'typeable_type' => get_class($admin_user)
        ]);

        //Assign a super admin role to the user
        $user->assignRole($request->role);

        //Throw the admin created event
        event(new AdminUserCreated($user, $password));

        notify()->success('Successfully created!');

        return redirect()->route("admin-user.index");
    }

    public function show(AdminUser $admin_user)
    {
        $roles = Role::all();

        return view('pages.admin.system.admin.edit', compact('admin_user', 'roles'));
    }

    public function update(Request $request, AdminUser $admin_user)
    {
        $rules = [
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($admin_user->user_info->id),
            ],

            'name' => 'required',
            'phone' => 'required|phone:AUTO,NG',
            'address' => 'required',
            'role' => 'required',
            'department' => 'required',
            'position' => 'required',
            'employee_id' => 'required',
        ];

        $customMessages = [
            'name.required' => 'Please provide the employee\'s name.',
            'email.required' => 'Please provide the employee\'s email.',
            'email.unique' => 'An employee with thesame email already exist.',
            'email.email' => 'Please provide a valid employee email.',
            'phone.required' => 'Please provide the employee\'s mobile number.',
            'phone.phone' => 'Please provide a valid phone number.',
            'address.required' => 'Please provide the employee\'s address.',
            'role.required' => "Please select employee's role",
            'department.required' => 'Please select the employee\'s department.',
            'position.phone' => 'Please select the employee\'s position.',
            'employee_id.required' => 'Please provide the employee\'s ID.',
            'sex.required' => "Please select employee's gender",
        ];

        $this->validate($request, $rules, $customMessages);

        $admin_user->update([
            'department' => $request->department,
            'position' => $request->position,
            'employee_id'=> $request->employee_id,
            'sex'=> $request->sex,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        $admin_user->user_info->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=> $request->phone,
        ]);

        $user->syncRoles($request->role);

        notify()->success("Successfully updated!");

        return redirect()->route('admin-user.index');
    }

    public function destroy(AdminUser $employee)
    {
        $employee->user_info->delete();
        $employee->delete();

        notify()->success("Successfully Deleted!");

        return redirect()->route('employees.index');
    }

    public function active(Request $request, AdminUser $admin_user){
        if($admin_user->user_info->is_active == 1){
            $user->update([
                'is_active' => '0',
            ]);

            notify()->success("Account deactivated successfully!");

            return response()->json([
                'message' => 'success',
            ], 200);
        }else if($admin_user->user_info->is_active == 0){
            $user->update([
                'is_active' => '1',
            ]);

            notify()->success("Account activated successfully!");
            
            return response()->json([
                'message' => 'success',
            ], 200);
        }
    }

    public function my_profile()
    {
        $user = auth()->user();

        return view('pages.admin.profile.short_profile', compact('user'));
    }

    public function others_profile(AdminUser $admin_user)
    {
        if($admin_user->user_info == auth()->user()){
            return redirect()->route('my_profile');
        }else{
            return view('pages.admin.profile.short_profile', compact('admin_user'));
        }
    }

    public function change_photo(Request $request, AdminUser $admin_user)
    {
        $request->validate([
            "image" => "required|mimes:jpeg,png"
        ]);

        if ($admin_user->user_info->profile_image !== 'avatars/default.png') {
            Storage::disk('public')->delete($admin_user->user_info->profile_image);
        }

        $path = $request->file('image')->store("User-".auth()->user()->id, 'public');

        $admin_user->user_info->profile_image = $path;
        
        $admin_user->user_info->save();

        notify()->success("Profile photo was updated successfully!");

        return response()->json([
            'message' => 'Updated successfully!'
        ], 200);
    }
}
