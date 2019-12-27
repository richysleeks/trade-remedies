<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportedCaseController extends Controller
{
	function __construct()
    {
        $this->middleware('permission:browse_department', ['only' => 'index']); 
        $this->middleware('permission:add_department', ['only' => 'create']);
        $this->middleware('permission:edit_department', ['only' => 'show']);
        $this->middleware('permission:delete_department', ['only' => 'destroy']);
    }

    public function index()
    {
        $cases = auth()->user()->cases;

        return view('pages.admin.department.list', compact('cases'));
    }

    public function create()
    {
        return view('pages.admin.department.create');
    }

    public function store(Request $request)
    {
        $rules = [
        	'description' => "required",
			'title' => "required",
        ];

        $customMessages = [
            'description.required' => 'Please provide a case description.',
            'title.required' => 'Please provide a case title.',
        ];

        $this->validate($request, $rules, $customMessages); 

        $reported_case = ReportedCase::create([
        	'description' => $request->description,
			'title' => $request->title,
			'exporter_name' => $request->exporter_name,
			'exporter_email' => $request->exporter_email,
			'exporter_address' => $request->exporter_address,
			'exporter_website' => $request->exporter_website,
			'exporter_phone' => $request->exporter_phone,
            'created_by' => auth()->user()->id,
        ]);

        // foreach(){
	        $document = Document::create([
	        	'url' => "",
				'type' => "",
	        ]);

	        CaseDocument::create([
	        	'reported_case_id' => $reported_case->id,
				'document_id' => $document->id
	        ]);
	    // }

        notify()->success("Successfully created!");

        return redirect()->route('department.index');
    }

    public function show(Department $department)
    {
        return view('pages.admin.department.edit', compact('department'));
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
            'name.required' => 'Please provide the faculty\'s name.',
            'name.unique' => 'Faculty name already exist.',
        ];

        $this->validate($request, $rules, $customMessages);

        $department->update([
            'name' => $request->name,
        ]);

        notify()->success("Successfully Updated!");

        return redirect()->route('department.index');
    }

    public function destroy(Department $department)
    {
        if($department->staff->count() > 0){
            notify()->warning("Can't be deleted, staffs exist in department.");
            return redirect()->route('department.index');
        }else{
            $department->delete();

            notify()->success("Successfully Deleted!");
            return redirect()->route('department.index');
        }
    }
}
