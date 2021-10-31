<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Five;
use Illuminate\Http\Request;

class FiveController extends Controller
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
        $installmentfive = new Five;
        $installmentfive->five = $request->get('five');
        $installmentfive->group = $request->get('group');
        $installmentfive->employee_name = $request->get('employee_name');
        $customer = Customer::find($request->get('customer_id'));
        $customer->instalmentfives()->save($installmentfive);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Five  $five
     * @return \Illuminate\Http\Response
     */
    public function show(Five $five)
    {
         //return view('customers.show',compact('five'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Five  $five
     * @return \Illuminate\Http\Response
     */
    public function edit(Five $five)
    {
         return view('five.edit', compact('five'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Five  $five
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Five $five)
    {
        $request->validate([
         'five' => 'required',
        ]);
        $five->five = $request->five;
        $five->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Five  $five
     * @return \Illuminate\Http\Response
     */
    public function destroy(Five $five)
    {
        //
    }
}
