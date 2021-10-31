<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\One;
use App\Models\two;
use App\Models\Three;
use App\Models\Four;
use App\Models\Five;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class wednesday extends Controller
{
    public function wednesday()
    {
        	       $users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','বুধবার ')
	            	->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','বুধবার ')
	            	->get();
            
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','বুধবার ')
	            	->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','বুধবার ')
	            	->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','বুধবার ')
	            	->get(); 
	            	
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           
           ->where([['group', '=','বুধবার'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.wednesday.wednesday', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
    public function wednesday1()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
	            	
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','বুধবার'],['employee', '=','রাজনু'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.wednesday.wednesday1', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
    
    public function wednesday2()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
	            	
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','বুধবার'],['employee', '=','হেনা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.wednesday.wednesday2', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }

    public function wednesday3()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();	            	
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','বুধবার'],['employee', '=','শামীমা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.wednesday.wednesday3', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
        public function wednesday4()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','বুধবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
	            	
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','বুধবার'],['employee', '=','নিলা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.wednesday.wednesday4', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
          public function wednesdaypaid()
    {   
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','বুধবার'],['paymentmethod', '=','paid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.wednesday.wednesdaypaid', compact('searches','month','year','now'))
          ->with('i');
    }
}
