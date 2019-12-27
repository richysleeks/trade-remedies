<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CaseUser;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class CaseUserController extends Controller
{
	function __construct()
    {

    }

    public function index()
    {
        $case_users = CaseUser::all();

        return view('pages.admin.system.admin.list', compact("case_users"));
    }

    public function show(CaseUser $case_user)
    {
        return view('pages.admin.system.admin.edit', compact('user'));
    }

    public function update(Request $request, CaseUser $case_user)
    {
        $rules = [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'phone' => 'required|phone:AUTO,NG',
            'address' => 'required',
        ];

        $customMessages = [
            'name.required' => 'Please provide your name.',
            'email.required' => 'Please provide your email.',
            'email.email' => 'Please provide a valid email.',
            'email.unique' => 'Email already taken, please use another.',
            'phone.required' => 'Please provide your mobile number.',
            'phone.phone' => 'Please provide a valid phone number.',
            'address.required' => 'Please provide your address.',
        ];

        $this->validate($request, $rules, $customMessages);

        $case_user->update([
            'company_name' => $request->company_name,
            'RC_number' => $request->RC_number,
            'address'=> $request->address,
            'phone'=> $request->phone,
        ]);

        $case_user->user_info->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        notify()->success("Successfully updated!");

        return redirect()->route('case-user.index');
    }

    public function active(Request $request, CaseUser $case_user)
    {
        if($case_user->user_info->is_active == 1){
            $case_user->update([
                'is_active' => '0',
            ]);

            notify()->success("Account deactivated successfully!");

            return response()->json([
                'message' => 'success',
            ], 200);
        }else if($case_user->user_info->is_active == 0){
            $user->update([
                'is_active' => '1',
            ]);

            notify()->success("Account activated successfully!","","bottomRight");
            
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

    public function change_photo(Request $request, CaseUser $case_user)
    {
        $request->validate([
            "image" => "required|mimes:jpeg,png"
        ]);

        if ($case_user->user_info->avatar !== 'avatars/default.png') {
            Storage::disk('public')->delete($case_user->user_info->avatar);
        }

        $path = $request->file('image')->store('avatars', 'public');

        $case_user->user_info->avatar = $path;
        
        $case_user->user_info->save();

        notify()->success("Profile photo was updated successfully!");

        return response()->json([
            'message' => 'Updated successfully!'
        ], 200);
    }
}
