<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\One;
use App\Models\two;
use App\Models\Three;
use App\Models\Four;
use App\Models\Five;
use App\Models\Weeklyinstalment;
use Carbon\Carbon;
use DB;

class monthlyCalculation extends Controller
{
public function monthlycalc(){

$usersm = DB::select('select year(created_at) as year, month(created_at) as month, sum(month) as total_amount from weeklyinstalments group by year(created_at), month(created_at)');		      
$users = DB::select('select year(created_at) as year, month(created_at) as month, sum(one) as total_amount from ones group by year(created_at), month(created_at)');
$users2 = DB::select('select year(created_at) as year, month(created_at) as month, sum(two) as total_amount from twos group by year(created_at), month(created_at)');
$users3 = DB::select('select year(created_at) as year, month(created_at) as month, sum(three) as total_amount from threes group by year(created_at), month(created_at)');
$users4 = DB::select('select year(created_at) as year, month(created_at) as month, sum(four) as total_amount from fours group by year(created_at), month(created_at)');
$users5 = DB::select('select year(created_at) as year, month(created_at) as month, sum(five) as total_amount from fives group by year(created_at), month(created_at)');

return view('admin.dashboard.monthlycalculation',compact('users','users2','users3','users4','users5','usersm'));
    }
public function daily(){
$usersm = DB::select('select year(created_at) as year, month(created_at)as month,day(created_at) as day, sum(month) as total_amount from weeklyinstalments group by year(created_at), month(created_at),day(created_at)');	
$users = DB::select('select  year(created_at) as year, month(created_at) as month,day(created_at) as day, sum(one) as total_amount from ones group by year(created_at), month(created_at),day(created_at)');
$users2 = DB::select('select year(created_at) as year, month(created_at) as month,day(created_at) as day, sum(two) as total_amount from twos group by year(created_at), month(created_at),day(created_at)');
$users3 = DB::select('select year(created_at) as year, month(created_at) as month,day(created_at) as day, sum(three) as total_amount from threes group by year(created_at), month(created_at),day(created_at)');
$users4 = DB::select('select year(created_at) as year, month(created_at) as month,day(created_at) as day, sum(four) as total_amount from fours group by year(created_at), month(created_at),day(created_at)');
$users5 = DB::select('select year(created_at) as year, month(created_at) as month,day(created_at) as day, sum(five) as total_amount from fives group by year(created_at), month(created_at),day(created_at)');

return view('admin.dashboard.daily',compact('users','users2','users3','users4','users5','usersm'));
    }
public function dashboard(){
          $Isearch = Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives');
           $iOnes = One::get();
           $iTwos = two::get();
           $iThrees = Three::get();
           $iFours = Four::get();
           $iFives = Five::get();
           $iMonths = Weeklyinstalment::get();
           $now = Carbon::now();
           $month = $now->format('F');
           $year=$now->year;
          return view('admin.dashboard.amounttotal', compact('Isearch','iOnes','iTwos','iThrees','iFours','iFives','iMonths','month','now'));

    return view('');
}    
}
