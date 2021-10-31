<?php
use App\Http\Controllers\castforhenaController;
use App\Http\Controllers\castfornilaController;
use App\Http\Controllers\CastforrajnuController;
use App\Http\Controllers\CastforshamimaController;
use App\Http\Controllers\ChangePasswordController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\FiveController;
use App\Http\Controllers\FourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MntController;
use App\Http\Controllers\monday;
use App\Http\Controllers\monthly;
use App\Http\Controllers\monthlyCalculation;

use App\Http\Controllers\OneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\satarday;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\sunday;
use App\Http\Controllers\ThreeController;
use App\Http\Controllers\thusday;
use App\Http\Controllers\tuesday;

use App\Http\Controllers\TwoController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\wednesday;
use App\Http\Controllers\WeeklyinstalmentController;

use Illuminate\Support\Facades\Route;

Route::get('/', [UploadImageController::

class , 'index']);

Auth::routes(['register' => false]);

Route::middleware([auth::class ])->group(function () {

		Route::resource('employees', EmployeeController::class );
		Route::get('/week', function () {
				return view('week');
			});

		Route::get('/search', function () {
				return view('admin.dashboard.search');
			});
		//Route::get('/dashboard', function () {
		// return view('admin.dashboard.index');
		//});
		Route::get('changepassword', [ChangePasswordController::class , 'index'])->name('change.password');
		Route::post('changepassword', [ChangePasswordController::class , 'changePassword']);

		//Route::get('editmonth/{id}', [monthlyEdit::class, 'show']);
		//Route::post('editmonth', [monthlyEdit::class, 'update']);

		Route::resource('ones', OneController::class );
		Route::resource('twos', TwoController::class );
		Route::resource('threes', ThreeController::class );
		Route::resource('fours', FourController::class );
		Route::resource('five', FiveController::class );
		Route::resource('month', MntController::class );
		Route::resource('weeklyinstalments', WeeklyinstalmentController::class );

		Route::resource('customers', CustomerController::class );

		Route::get('employeecast', [CastforrajnuController::class , 'emplyoee']);

		Route::get('satforrajnu', [CastforrajnuController::class , 'sat']);
		Route::get('sunforrajnu', [CastforrajnuController::class , 'sun']);
		Route::get('monforrajnu', [CastforrajnuController::class , 'mon']);
		Route::get('tueforrajnu', [CastforrajnuController::class , 'tue']);
		Route::get('wedforrajnu', [CastforrajnuController::class , 'wed']);
		Route::get('thusforrajnu', [CastforrajnuController::class , 'thus']);
		Route::get('monthforrajnu', [CastforrajnuController::class , 'mont']);

		Route::get('satforhena', [castforhenaController::class , 'sat']);
		Route::get('sunforhena', [castforhenaController::class , 'sun']);
		Route::get('monforhena', [castforhenaController::class , 'mon']);
		Route::get('tueforhena', [castforhenaController::class , 'tue']);
		Route::get('wedforhena', [castforhenaController::class , 'wed']);
		Route::get('thusforhena', [castforhenaController::class , 'thus']);
		Route::get('monthforhena', [castforhenaController::class , 'mont']);

		Route::get('satfornila', [castfornilaController::class , 'satd']);
		Route::get('sunfornila', [castfornilaController::class , 'sund']);
		Route::get('monfornila', [castfornilaController::class , 'mond']);
		Route::get('tuefornila', [castfornilaController::class , 'tued']);
		Route::get('wedfornila', [castfornilaController::class , 'wedd']);
		Route::get('thusfornila', [castfornilaController::class , 'thusd']);
		Route::get('monthfornila', [castfornilaController::class , 'mont']);

		Route::get('satforshamima', [CastforshamimaController::class , 'sat']);
		Route::get('sunforshamima', [CastforshamimaController::class , 'sun']);
		Route::get('monforshamima', [CastforshamimaController::class , 'mon']);
		Route::get('tueforshamima', [CastforshamimaController::class , 'tue']);
		Route::get('wedforshamima', [CastforshamimaController::class , 'wed']);
		Route::get('thusforshamima', [CastforshamimaController::class , 'thus']);
		Route::get('monthforshamima', [CastforshamimaController::class , 'mont']);

		Route::get('monthlycalculation', [monthlyCalculation::class , 'monthlycalc']);
		Route::get('dailycalculation', [monthlyCalculation::class , 'daily']);
		Route::get('dashboard', [monthlyCalculation::class , 'dashboard']);

		Route::get('satarday/emp1', [satarday::class , 'satarday1']);
		Route::get('satarday/emp2', [satarday::class , 'satarday2']);
		Route::get('satarday/emp3', [satarday::class , 'satarday3']);
		Route::get('satarday/emp4', [satarday::class , 'satarday4']);
		Route::get('satarday', [satarday::class , 'satarday']);
		Route::get('satardaypaid', [satarday::class , 'satardaypaid']);

		Route::get('sunday/emp1', [sunday::class , 'sunday1']);
		Route::get('sunday/emp2', [sunday::class , 'sunday2']);
		Route::get('sunday/emp3', [sunday::class , 'sunday3']);
		Route::get('sunday/emp4', [sunday::class , 'sunday4']);
		Route::get('sunday', [sunday::class , 'sunday']);
		Route::get('sundaypaid', [sunday::class , 'sundaypaid']);

		Route::get('monday/emp1', [monday::class , 'monday1']);
		Route::get('monday/emp2', [monday::class , 'monday2']);
		Route::get('monday/emp3', [monday::class , 'monday3']);
		Route::get('monday/emp4', [monday::class , 'monday4']);
		Route::get('monday', [monday::class , 'monday']);
		Route::get('mondaypaid', [monday::class , 'mondaypaid']);

		Route::get('tuesday/emp1', [tuesday::class , 'tuesday1']);
		Route::get('tuesday/emp2', [tuesday::class , 'tuesday2']);
		Route::get('tuesday/emp3', [tuesday::class , 'tuesday3']);
		Route::get('tuesday/emp4', [tuesday::class , 'tuesday4']);
		Route::get('tuesday', [tuesday::class , 'tuesday']);
		Route::get('tuesdaypaid', [tuesday::class , 'tuesdaypaid']);

		Route::get('wednesday/emp1', [wednesday::class , 'wednesday1']);
		Route::get('wednesday/emp2', [wednesday::class , 'wednesday2']);
		Route::get('wednesday/emp3', [wednesday::class , 'wednesday3']);
		Route::get('wednesday/emp4', [wednesday::class , 'wednesday4']);
		Route::get('wednesday', [wednesday::class , 'wednesday']);
		Route::get('wednesdaypaid', [wednesday::class , 'wednesdaypaid']);

		Route::get('thusday/emp1', [thusday::class , 'thusday1']);
		Route::get('thusday/emp2', [thusday::class , 'thusday2']);
		Route::get('thusday/emp3', [thusday::class , 'thusday3']);
		Route::get('thusday/emp4', [thusday::class , 'thusday4']);
		Route::get('thusday', [thusday::class , 'thusday']);
		Route::get('thusdaypaid', [thusday::class , 'thusdaypaid']);

		Route::get('monthly/emp1', [monthly::class , 'monthly1']);
		Route::get('monthly/emp2', [monthly::class , 'monthly2']);
		Route::get('monthly/emp3', [monthly::class , 'monthly3']);
		Route::get('monthly/emp4', [monthly::class , 'monthly4']);
		Route::get('monthly', [monthly::class , 'monthly']);
		Route::get('monthlypaid', [monthly::class , 'monthlypaid']);

		Route::post('/installment/store', [WeeklyinstalmentController::class , 'store'])->name('installment.add');

		Route::post('/installmentone/store', [OneController::class , 'store'])->name('installmentone.add');
		Route::post('/installmenttwo/store', [TwoController::class , 'store'])->name('installmenttwo.add');
		Route::post('/installmentthree/store', [ThreeController::class , 'store'])->name('installmentthree.add');
		Route::post('/installmentfour/store', [FourController::class , 'store'])->name('installmentfour.add');
		Route::post('/installmentfive/store', [FiveController::class , 'store'])->name('installmentfive.add');
		Route::post('/installmentmonth/store', [MntController::class , 'store'])->name('installmentmonth.add');

		//Route::get('instalment', [WeeklyinstalmentController::class, 'index']);
		//Route::post('instalment/weekly', [WeeklyinstalmentController::class, 'store'])->name('instalment.store');
		//Route::get('weeklyinstalment', [WeeklyinstalmentController::class, 'index']);

		Route::get('search', [SearchController::class , 'search'])->name('search');
		Route::get('/home', [HomeController::class , 'index'])->name('home');

		Route::resource('posts', PostController::class );

	});

Route::get('/raf', function () {
		return view('raf');
	});
Route::get('/test', function () {
		return view('custommertable');
	});

Route::get('/head', function () {
		return view('layouts.head');
	});
//Route::get('/employee-registar', function () {
// return view('employee.index');
//});
/*Route::get('/customer-registar', function () {
return view('customer.register.index');
});
 */
