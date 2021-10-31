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
class SearchController extends Controller

{
      public function search(){

          $users = DB::select('select year(created_at) as year, month(created_at) as month, sum(one) as total_amount from ones group by year(created_at), month(created_at)');
          $users2 = DB::select('select year(created_at) as year, month(created_at) as month, sum(two) as total_amount from twos group by year(created_at), month(created_at)');
          $users3 = DB::select('select year(created_at) as year, month(created_at) as month, sum(three) as total_amount from threes group by year(created_at), month(created_at)');
          $users4 = DB::select('select year(created_at) as year, month(created_at) as month, sum(four) as total_amount from fours group by year(created_at), month(created_at)');
          $users5 = DB::select('select year(created_at) as year, month(created_at) as month, sum(five) as total_amount from fives group by year(created_at), month(created_at)'); 
      $now = Carbon::now();
      $month = $now->format('F');
      $year=$now->year;
      $search_text =$_GET['search'];
      $searches =Customer::with('instalmentones','instalmenttwos','instalmentthrees','instalmentfours','instalmentfives','instalments')
      ->where('number','LIKE','%'.$search_text.'%')
      ->orWhere('name', 'like', '%' . $search_text. '%')->paginate(25);
      return view('admin.dashboard.installments.index',compact('searches','month','year','users','users2','users3','users4','users5','now'))->with('i');
    }
}