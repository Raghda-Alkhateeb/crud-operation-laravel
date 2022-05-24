<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $departments=Department::all();
        $departments=Department::paginate(8);
        return view('Department.allDeparment',compact("departments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('Department.addDepartment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $dept=new Department;
       $dept->name=$request->departName;
       $dept->description=$request->departDescription;
       $dept->save();
       return redirect('department/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dept=Department::where('id', $id)->first();
     return view('Department.oneDepart',compact('dept'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $dept=Department::where('id', $id)->first();
     return view('Department.edit',compact('dept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {  
        $dept = Department::find($id);
        $dept->name = $request->departName;
        $dept->description = $request->departDescription; 
        $dept->save();
        return redirect('department/all');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dept=Department::find($id);
        $dept->delete();
        return redirect('department/all');

    }
}
