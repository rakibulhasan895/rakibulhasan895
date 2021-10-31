<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\two;
use Illuminate\Http\Request;

class TwoController extends Controller
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
        $installmenttwo = new two;
        $installmenttwo->two = $request->get('two');
        $installmenttwo->group = $request->get('group');
        $installmenttwo->employee_name = $request->get('employee_name');
        $customer = Customer::find($request->get('customer_id'));
        $customer->instalmenttwos()->save($installmenttwo);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\two  $two
     * @return \Illuminate\Http\Response
     */
    public function show(two $two)
    {
        return view('customers.show',compact('two'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\two  $two
     * @return \Illuminate\Http\Response
     */
    public function edit(two $two)
    {
        return view('twos.edit', compact('two'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\two  $two
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, two $two)
    {
        $request->validate([
            'two' => 'required',
        ]);
        $two->two = $request->two;
        $two->save();
        return back();;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\two  $two
     * @return \Illuminate\Http\Response
     */
    public function destroy(two $two)
    {
        //
    }
}
