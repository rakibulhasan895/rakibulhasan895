<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Four;
use Illuminate\Http\Request;

class FourController extends Controller
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
        $installmentfour = new Four;
        $installmentfour->four = $request->get('four');
        $installmentfour->group = $request->get('group');
        $installmentfour->employee_name = $request->get('employee_name');
        $customer = Customer::find($request->get('customer_id'));
        $customer->instalmentfours()->save($installmentfour);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Four  $four
     * @return \Illuminate\Http\Response
     */
    public function show(Four $four)
    {
         return view('customers.show',compact('four'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Four  $four
     * @return \Illuminate\Http\Response
     */
    public function edit(Four $four)
    {
         return view('fours.edit', compact('four'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Four  $four
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Four $four)
    {
        $request->validate([
            'four' => 'required',
        ]);
        $four->four = $request->four;
        $four->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Four  $four
     * @return \Illuminate\Http\Response
     */
    public function destroy(Four $four)
    {
        //
    }
}
