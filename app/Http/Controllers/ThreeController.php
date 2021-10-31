<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Three;
use Illuminate\Http\Request;

class ThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $registers = Customer::latest()->paginate(25);
          //$installments = Weeklyinstalment::latest()->paginate(25);
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.installments.index', compact('registers','month','year'))
          ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $installmentthree = new Three;
        $installmentthree->three = $request->get('three');
        $installmentthree->group = $request->get('group');
        $installmentthree->employee_name = $request->get('employee_name');
        $customer = Customer::find($request->get('customer_id'));
        $customer->instalmentthrees()->save($installmentthree);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Three  $three
     * @return \Illuminate\Http\Response
     */
    public function show(Three $three)
    {
         return view('customers.show',compact('three'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Three  $three
     * @return \Illuminate\Http\Response
     */
    public function edit(Three $three)
    {
         return view('threes.edit', compact('three'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Three  $three
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Three $three)
    {
        $request->validate([
            'three' => 'required',
        ]);
        $three->three = $request->three;
        $three->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Three  $three
     * @return \Illuminate\Http\Response
     */
    public function destroy(Three $three)
    {
        //
    }
}
