<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::latest()->paginate(5);
        return view('employees.index', compact('employees'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gname' => 'required',
            'village' => 'required',
            'union' => 'required',
            'number' => 'required|digits:11',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'zela' => 'required',
        ]);
        $path = $request->file('image')->store('public/image');
        $employee = new employee;
        $employee->name = $request->name;
        $employee->gname = $request->gname;
        $employee->village = $request->village;
        $employee->union = $request->union;
        $employee->number = $request->number;
        $employee->zela = $request->zela;
        $employee->image = $path;
        $employee->save();
        return redirect()->route('employees.index')
                        ->with('success','Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $request->validate([
            //'name' => 'required',
            'gname' => 'required',
            'number' => 'required|digits:11',
            'zela' => 'required',
            'village' => 'required',
            'union' => 'required',
        ]);
        
        //$post = Post::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/image');
            $employee->image = $path;
        }
        //$employee->name = $request->name;
        $employee->gname = $request->gname;
        $employee->village = $request->village;
        $employee->union = $request->union;
        $employee->number = $request->number;
        $employee->zela = $request->zela;
        $employee->save();
        return redirect()->route('employees.index')
                        ->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')
                        ->with('success','Deleted successfully');
    }
}
