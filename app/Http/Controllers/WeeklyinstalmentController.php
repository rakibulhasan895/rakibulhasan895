<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Weeklyinstalment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class WeeklyinstalmentController extends Controller
{
    public function index()
    {     
            $users = DB::select('select year(created_at) as year, month(created_at) as month, sum(one) as total_amount from ones group by year(created_at), month(created_at)');
            $users2 = DB::select('select year(created_at) as year, month(created_at) as month, sum(two) as total_amount from twos group by year(created_at), month(created_at)');
            $users3 = DB::select('select year(created_at) as year, month(created_at) as month, sum(three) as total_amount from threes group by year(created_at), month(created_at)');
            $users4 = DB::select('select year(created_at) as year, month(created_at) as month, sum(four) as total_amount from fours group by year(created_at), month(created_at)');
            $users5 = DB::select('select year(created_at) as year, month(created_at) as month, sum(five) as total_amount from fives group by year(created_at), month(created_at)'); 
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.weeklyinstalments.index', compact('searches','month','year','users','users2','users3','users4','users5','now'))->with('i');
    }

    public function create()
    {
        return view('admin.dashboard.weeklyinstalments.create', compact('installments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function stoe(Request $request)
    //{
       /*     $request->validate([
            'one' => 'required',
            'two' => 'required',
            'three' => 'required',
            'four' => 'required',
            'five' => 'required',
        ]);
        */

        //Customer::create($request->all());
       // return redirect()->route('weekly');
            //->with('success', 'Registration successfully.');
    //}
    public function store(Request $request)
    {
        $installment = new Weeklyinstalment;
        $installment->month = $request->get('month');
        $installment->group = $request->get('group');
        $installment->employee_name = $request->get('employee_name');
        $customer = Customer::find($request->get('customer_id'));
        $customer->instalments()->save($installment);
        return back();
    }
    public function show(Weeklyinstalment $weeklyinstalment)
    {
        return view('customers.show', compact('weeklyinstalment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weeklyinstalment  $weeklyinstalment
     * @return \Illuminate\Http\Response
     */
    public function edit(Weeklyinstalment $weeklyinstalment)
    {
        return view('weeklyinstalments.edit', compact('weeklyinstalment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weeklyinstalment  $weeklyinstalment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weeklyinstalment $weeklyinstalment)
    {
      
        $request->validate([
        'month' => 'required',
        ]);
        $weeklyinstalment->month = $request->month;
        $weeklyinstalment->save();
        return back();
       /* $request->validate([
         'month' => 'required',
        ]); */
        //$weeklyinstalment = Weeklyinstalment::find(1);
        //$weeklyinstalment->month = $request->month;
       // $weeklyinstalment->save();
        //return back();
        
        // $weeklyinstalment->update($request->all());
          //return back();
       // return redirect()->route('customers.show')
           // ->with('success', 'Updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weeklyinstalment  $weeklyinstalment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weeklyinstalment $weeklyinstalment)
    {
        //
    }
}
