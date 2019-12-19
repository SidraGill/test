<?php
/**
 * Created by PhpStorm.
 * User: anasi
 * Date: 9/12/2019
 * Time: 1:50 PM
 */

namespace App\Http\Controllers;

use App\User;
use App\User_details;
use Symfony\Component\HttpFoundation\Request;

class PersonalInfo_controller extends Controller{
    public function __construct(){
    }

    public function setUserInformation(Request $request){
        $id = $request->get('id');
        $city = $request->get('city');
        $country = $request->get('country');
        $dob = $request->get('dob');
        $cnic = $request->get('cnic');
        $file_return = $request->get('file_return');
        $file_upload = $request->get('file_upload');
        $first_name = $request->get('first_name');
        $is_pakistani = $request->get('is_pakistani');
        $last_name = $request->get('last_name');
        $over_3years = $request->get('over_3years');
        $passport = $request->get('passport');
        $stay_183days = $request->get('stay_183days');
        $stay_bcz_of_emp = $request->get('stay_bcz_of_emp');


        User::updateOrCreate(array('id' => '1'), array('city' => $city, 'country' => $country, 'dob' => $dob, 'cnic' => $cnic, 'file_return' => $file_return, 'file_upload' => $file_upload, 'first_name' => $first_name, 'is_pakistani' => $is_pakistani, 'last_name' => $last_name, 'over_3years' => $over_3years, 'passport' => $passport, 'stay_183days' => $stay_183days, 'stay_bcz_of_emp' => $stay_bcz_of_emp,));
    }

    public function getUserInformation(Request $request){
//        $id = $request->get('user_id');
//        dd($request->ajax());
        $user = User::where('id', '1')->get();
        return response()->json([$user]);
    }

    public function reset_date(){
        User_details::truncate();

        return view('layouts.app');
    }
}
