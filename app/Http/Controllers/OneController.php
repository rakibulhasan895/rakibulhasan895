<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\One;
use Illuminate\Http\Request;

class OneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $installmentone = new One;
        $installmentone->one = $request->get('one');
        $installmentone->group = $request->get('group');
        $installmentone->employee_name = $request->get('employee_name');
        $customer = Customer::find($request->get('customer_id'));
        $customer->instalmentones()->save($installmentone);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\One  $one
     * @return \Illuminate\Http\Response
     */
    public function show(One $one)
    {
        return view('customers.show',compact('one'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\One  $one
     * @return \Illuminate\Http\Response
     */
    public function edit(One $one)
    {
        return view('ones.edit', compact('one'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\One  $one
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, One $one)
    {
        $request->validate([
        'one' => 'required',
        ]);
        $one->one = $request->one;
        $one->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\One  $one
     * @return \Illuminate\Http\Response
     */
    public function destroy(One $one)
    {
        //
    }
}
