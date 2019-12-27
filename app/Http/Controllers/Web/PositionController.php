<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use App\Position;

class PositionController extends Controller
{
	// function __construct()
 //    {
 //        $this->middleware('permission:browse_position', ['only' => 'index']); 
 //        $this->middleware('permission:add_position', ['only' => 'create']);
 //        $this->middleware('permission:edit_position', ['only' => 'show']);
 //        $this->middleware('permission:delete_position', ['only' => 'destroy']);
 //    }

    public function index()
    {
        $positions = Position::latest()->paginate(5);

        return view('pages.position.list', compact('positions'));
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|unique:positions,title'
        ];

        $customMessages = [
            'title.required' => 'Please provide the position title.',
            'title.unique' => 'Position title already exist.',
        ];

        $this->validate($request, $rules, $customMessages); 

        Position::create([
            'title' => $request->title,
            'created_by' => auth()->user()->id,
        ]);

        notify()->success("Successfully created!");

        return redirect()->route('positions.index');
    }

    public function show(Position $position)
    {
        $positions = Position::latest()->paginate(5);

        return view('pages.position.edit', compact('position', 'positions'));
    }

    public function update(Request $request, Position $position)
    {
        $rules = [
            'title' => [
                'required',
                Rule::unique('positions')->ignore($position->id),
            ],
        ];

        $customMessages = [
            'title.required' => 'Please provide the position title.',
            'title.unique' => 'Position title already exist.',
        ];

        $this->validate($request, $rules, $customMessages);

        $position->update([
            'title' => $request->title,
        ]);

        notify()->success("Successfully Updated!");

        return redirect()->route('departments.index');
    }

    public function destroy(Position $position)
    {
        if($position->staff->count() > 0){
            notify()->warning("Can't be deleted, staffs with position exist.");

            return redirect()->route('positions.index');
        }else{
            $position->delete();

            notify()->success("Successfully Deleted!");
            return redirect()->route('positions.index');
        }
    }
}
