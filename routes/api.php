<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/personalInfo', 'PersonalInfo_controller@setUserInformation');
Route::post('/getPersonalInfo', 'PersonalInfo_controller@getUserInformation');

Route::post('/creditInfo', 'CreditInfo_controller@setCreditInfo');

Route::post('/deductionInfo', 'DeductionInfo_controller@setDeductionInfo');
Route::post('/incomeInfo', 'IncomeInfo_controller@setincomeInfo');
Route::post('/propertyInfo', 'PropertyInfo_controller@setPropertyInfo');
Route::post('/wealthInfo', 'WealthInfo_controller@setwealthInfo');
Route::post('/otherInfo', 'OtherIncomeInfo_controller@setOtherIncomeInfo');
Route::post('/adjustInfo', 'AdjustableInfo_Controller@setAdjustableInfo');

Route::post('/getReport', 'Report_controller@getReportData');
//Route::post('/getProperty', 'Report_controller@getproperty');
Route::get('/reset', 'PersonalInfo_controller@reset_date');



