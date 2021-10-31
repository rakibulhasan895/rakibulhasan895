<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\One;
use App\Models\two;
use App\Models\Three;
use App\Models\Four;
use App\Models\Five;
use App\Models\Weeklyinstalment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class monthly extends Controller
{
    public function monthly()
    {

        	       $usersm = Weeklyinstalment::select(
		             \DB::raw('sum(month) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','মাসিক ')
	            	->get(); 
		
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives','instalments')
           ->where([['group', '=','মাসিক'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monthly.monthly', compact('searches','month','year','usersm','now'))
          ->with('i');
    }    
    public function monthly1()
    {
			         $usersm = Weeklyinstalment::select(
		             \DB::raw('sum(month) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','মাসিক'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
            
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives','instalments')
           ->where([['group', '=','মাসিক'],['employee', '=','রাজনু'],['paymentmethod', '=','unpaid']] )
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monthly.monthly1', compact('searches','month','year','usersm','now'))
          ->with('i');
    }
    public function monthly2()
    {
			         $usersm = Weeklyinstalment::select(
		             \DB::raw('sum(month) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','মাসিক'],['employee_name', '=','হেনা ']])	
	              	     ->get();
		
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives','instalments')
           ->where([['group', '=','মাসিক'],['employee', '=','হেনা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monthly.monthly2', compact('searches','month','year','usersm','now'))
          ->with('i');
    }
    public function monthly3()
    {
			         $usersm = Weeklyinstalment::select(
		             \DB::raw('sum(month) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','মাসিক'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
		
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives','instalments')
           ->where([['group', '=','মাসিক'],['employee', '=','শামীমা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monthly.monthly3', compact('searches','month','year','usersm','now'))
          ->with('i');
    }
    public function monthly4()
    {
			         $usersm = Weeklyinstalment::select(
		             \DB::raw('sum(month) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','মাসিক'],['employee_name', '=','নিলা ']])	
	              	     ->get();
		
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives','instalments')
           ->where([['group', '=','মাসিক'],['employee', '=','নিলা'],['paymentmethod', '=','unpaid']] )
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monthly.monthly4', compact('searches','month','year','usersm','now'))
          ->with('i');
    }
        public function monthlypaid()
    {
	       $usersm = Weeklyinstalment::select(
		 \DB::raw('sum(month) as total_amount'), 
		 \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
		->where('group', '=','মাসিক' )
		->groupby('months')->get();
		
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives','instalments')
           ->where([['group', '=','মাসিক'],['paymentmethod', '=','paid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monthly.monthlypaid', compact('searches','month','year','usersm','now'))
          ->with('i');
    } 
}
