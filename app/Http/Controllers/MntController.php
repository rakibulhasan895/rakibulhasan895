<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Mnt;
use Illuminate\Http\Request;

class MntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $installmentmonth = new Mnt;
        $installmentmonth->month = $request->get('month');
        $installmentmonth->group = $request->get('group');
        $installmentmonth->employee_name = $request->get('employee_name');
        $customer = Customer::find($request->get('customer_id'));
        $customer->$installmentmonths()->save($installmentmonth);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Four  $four
     * @return \Illuminate\Http\Response
     */
    public function show(Mnt $mnt)
    {
         return view('customers.show',compact('mnt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Four  $four
     * @return \Illuminate\Http\Response
     */
    public function edit(Mnt $mnt)
    {
         return view('mnts.edit', compact('mnt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Four  $four
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mnt $mnt)
    {
        $request->validate([
            'month' => 'required',
        ]);
        $mnt->month = $request->month;
        $mnt->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Four  $four
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mnt $mnt)
    {
        //
    }
}
