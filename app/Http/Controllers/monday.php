<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
//use Jenssegers\Date\Date;
use Carbon\CarbonInterval;
use App\Models\Customer;
use App\Models\One;
use App\Models\two;
use App\Models\Three;
use App\Models\Four;
use App\Models\Five;
use Illuminate\Http\Request;
use DB;
class monday extends Controller
{
  public function monday1()
    {   
        
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু ']])	
	              	     ->get();

           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','সোমবার'],['employee', '=','রাজনু'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monday.monday1', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }

      public function monday2()
    {   
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','হেনা ']])	
	              	     ->get();
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','সোমবার'],['employee', '=','হেনা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monday.monday2', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
      public function monday3()
    {   
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','শামীমা ']])	
	              	     ->get();
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','সোমবার'],['employee', '=','শামীমা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monday.monday3', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
          public function monday4()
    {   
	            	$users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	     ->where([['group', '=','সোমবার'],['employee_name', '=','নিলা ']])	
	              	     ->get();
	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','সোমবার'],['employee', '=','নিলা'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monday.monday4', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
          public function monday()
    {   
        	       $users = One::select(
		             \DB::raw('sum(one) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','সোমবার ')
	            	->get();
        	       $users2 = two::select(
		             \DB::raw('sum(two) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','সোমবার ')
	            	->get();
            
        	       $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','সোমবার ')
	            	->get();
        	       $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','সোমবার ')
	            	->get();
        	       $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'))
		             ->whereMonth('created_at', Carbon::now()->month)
	              	->where('group', '=','সোমবার ')
	            	->get(); 

	            	
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','সোমবার'],['paymentmethod', '=','unpaid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monday.monday', compact('searches','month','year','users','users2','users3','users4','users5','now'))
          ->with('i');
    }
      public function mondaypaid()
    {   
           $searches = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives')
           ->where([['group', '=','সোমবার'],['paymentmethod', '=','paid']])
           ->paginate(20);  
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.group.monday.mondaypaid', compact('searches','month','year','now'))
          ->with('i');
    }
    

}
