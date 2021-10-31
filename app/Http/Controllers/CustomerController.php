<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use App\Models\One;
use App\Models\two;
use App\Models\Three;
use App\Models\Four;
use App\Models\Five;
use App\Models\Weeklyinstalment;
use App\Models\Customer;
use App\Models\employee;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
           $installmentonesum = One::sum('one'); 
           $installmenttwosum = two::sum('two');
           $installmentthreesum = Three::sum('three');
           $installmentfoursum = Four::sum('four');
           $installmentfivesum = Five::sum('five'); 
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
              ->orderBy('created_at','desc')->paginate(25);
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
           return view('admin.dashboard.installments.index',compact('searches','month','installmentonesum','installmenttwosum','installmentthreesum','installmentfoursum','installmentfivesum','now','year'))
           ->with('i');
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = employee::latest()->paginate(5);
        return view('customers.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->get('name');
        $customer->gname = $request->get('gname');
        $customer->number = $request->get('number');
        $customer->group = $request->get('group');
        $customer->village = $request->get('village');
        $customer->union = $request->get('union');
        $customer->employee = $request->get('employee');
        $customer->employee_id = $request->get('employee_id');
        $customer->zela = $request->get('zela');
        $customer->loantypes = $request->get('loantypes');
        $customer->loanamount = $request->get('loanamount');
        $customer->date = $request->get('date');
        $customer->advanced = $request->get('advanced');
        $customer->Status = $request->get('Status');
        $customer->installment = $request->get('installment');
        $customer->payment = $request->get('payment'); 
        $customer->paymentmethod = $request->get('paymentmethod');
        $customer->save();
        return redirect()->route('customers.index')
            ->with('success', 'Registration successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer 
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
           $installmentonesum = One::sum('one'); 
           $installmenttwosum = two::sum('two');
           $installmentthreesum = Three::sum('three');
           $installmentfoursum = Four::sum('four');
           $installmentfivesum = Five::sum('five');      
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
        return view('customers.show',compact('customer','month','year','installmentonesum','installmenttwosum','installmentthreesum','installmentfoursum','installmentfivesum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $employees = employee::latest()->paginate(5);
        return view('customers.edit',compact('customer','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
          $customer->update($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
                $custommer->delete();
        return redirect()->route('customers.index')->with('success','deleted successfull');
    
    }
}
