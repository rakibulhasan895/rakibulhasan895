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
class sunday extends Controller
{
    public function sunday()
    {
        	       $users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','রবিবার ')
	            	->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','রবিবার ')
	            	->get();
            
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','রবিবার ')
	            	->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','রবিবার ')
	            	->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','রবিবার ')
	            	->get(); 
            $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','রবিবার'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
           return view('admin.group.sunday.sunday', compact('searches','month','year','users','users2','users3','users4','users5','now'))
           ->with('i');
    }
    public function sunday1()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get(); 
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','রবিবার'],['employee', '=','রাজনু'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.sunday.sunday1', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i' );
    }
    public function sunday2()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get(); 
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','রবিবার'],['employee', '=','হেনা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.sunday.sunday2', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
    public function sunday3()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','শামীমা']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','শামীমা']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','শামীমা']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','শামীমা']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','শামীমা']])	
	              	     ->get(); 
	    $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','রবিবার'],['employee', '=','শামীমা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.sunday.sunday3', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
    public function sunday4()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','নিলা']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','নিলা']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','নিলা']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','নিলা']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','রবিবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();           
	    $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','রবিবার'],['employee', '=','নিলা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.sunday.sunday4', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
    public function sundaypaid()
    {   
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','রবিবার'],['paymentmethod', '=','paid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.sunday.sundaypaid', compact('searches','month','year','now'))
          ->with('i');
    }
}
