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
class satarday extends Controller
{
    public function satarday()
    {
        	       $users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','শনিবার ')
	            	->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','শনিবার ')
	            	->get();
            
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','শনিবার ')
	            	->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','শনিবার ')
	            	->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','শনিবার ')
	            	->get();            
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','শনিবার'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
           //foreach($searches as $search){
           //if($searches->payment != 'paid'){
          return view('admin.group.satarday.satarday', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
           //}}
    }
    public function satarday1()
    {	            	
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get(); 
	            	
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','শনিবার'],['employee', '=','রাজনু'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.satarday.satarday1', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
    public function satarday2()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();           
	            	$searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','শনিবার'],['employee', '=','হেনা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.satarday.satarday2', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }       
     public function satarday3()
    {
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();  
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','শনিবার'],['employee', '=','শামীমা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.satarday.satarday3', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
    public function satarday4()
    {
        	       $users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','শনিবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();          
	     $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','শনিবার'],['employee', '=','নিলা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.satarday.satarday4', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i' );
    }
      public function satardaypaid()
    {   
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','শনিবার'],['paymentmethod', '=','paid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.satarday.satardaypaid', compact('searches','month','year','now'))
          ->with('i');
    }
}
