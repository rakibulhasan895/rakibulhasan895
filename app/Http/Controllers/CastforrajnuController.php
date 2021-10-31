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
use App\Models\Weeklyinstalment;
use Illuminate\Http\Request;
use DB;

class CastforrajnuController extends Controller
{

public function emplyoee(){
    
    return view('admin.dashboard.employeecast');
}

    public function sat()
    {
     
        	     $users = One::select(
		             \DB::raw('sum(one) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু']])	         
	              	  ->groupby('months')->get();
	             $users2= two::select(
		             \DB::raw('sum(two) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু']])	
	              	->groupby('months')->get();
	            $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
                        ->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	 ->where([['group', '=','শনিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
           
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.rajnu.sat', compact('month','year','users','users2','users3','users4','users5','now'));
    }
        public function sun()
    {
     
        	     $users = One::select(
		             \DB::raw('sum(one) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু']])	         
	              	  ->groupby('months')->get();
	             $users2= two::select(
		             \DB::raw('sum(two) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু']])	
	              	->groupby('months')->get();
	            $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
                        ->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	 ->where([['group', '=','রবিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
           
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.rajnu.sun', compact('month','year','users','users2','users3','users4','users5','now'));
    }
        public function mon()
    {
     
        	     $users = One::select(
		             \DB::raw('sum(one) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু']])	         
	              	  ->groupby('months')->get();
	             $users2= two::select(
		             \DB::raw('sum(two) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু']])	
	              	->groupby('months')->get();
	            $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
                        ->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	 ->where([['group', '=','সোমবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
           
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.rajnu.mon', compact('month','year','users','users2','users3','users4','users5','now'));
    }
        public function tue()
    {
     
        	     $users = One::select(
		             \DB::raw('sum(one) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','মঙ্গলবার'],['employee_name', '=','রাজনু']])	         
	              	  ->groupby('months')->get();
	             $users2= two::select(
		             \DB::raw('sum(two) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','মঙ্গলবার '],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','মঙ্গলবার '],['employee_name', '=','রাজনু']])	
	              	->groupby('months')->get();
	            $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
                        ->where([['group', '=','মঙ্গলবার '],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	 ->where([['group', '=','মঙ্গলবার '],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
           
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.rajnu.tue', compact('month','year','users','users2','users3','users4','users5','now'));
    }
        public function wed()
    {
     
        	     $users = One::select(
		             \DB::raw('sum(one) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু']])	         
	              	  ->groupby('months')->get();
	             $users2= two::select(
		             \DB::raw('sum(two) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু']])	
	              	->groupby('months')->get();
	            $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
                        ->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	 ->where([['group', '=','বুধবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
           
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.rajnu.wed', compact('month','year','users','users2','users3','users4','users5','now'));
    }
         public function thus()
    {
     
        	     $users = One::select(
		             \DB::raw('sum(one) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','বৃহস্পতিবার'],['employee_name', '=','রাজনু']])	         
	              	  ->groupby('months')->get();
	             $users2= two::select(
		             \DB::raw('sum(two) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','বৃহস্পতিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users3 = Three::select(
		             \DB::raw('sum(three) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','বৃহস্পতিবার'],['employee_name', '=','রাজনু']])	
	              	->groupby('months')->get();
	            $users4 = Four::select(
		             \DB::raw('sum(four) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
                        ->where([['group', '=','বৃহস্পতিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
	            $users5 = Five::select(
		             \DB::raw('sum(five) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	 ->where([['group', '=','বৃহস্পতিবার'],['employee_name', '=','রাজনু']])
	            	->groupby('months')->get();
           
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.rajnu.thus', compact('month','year','users','users2','users3','users4','users5','now'));
    }
         public function mont()
    {
     
        	     $users = Weeklyinstalment::select(
		             \DB::raw('sum(month) as total_amount'), 
		             \DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"))
	              	->where([['group', '=','মাসিক'],['employee_name', '=','রাজনু']])         
	              	  ->groupby('months')->get();
           
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.rajnu.mont', compact('month','year','users','now'));
    }    

}
