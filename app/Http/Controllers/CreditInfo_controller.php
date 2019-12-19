<?php
/**
 * Created by PhpStorm.
 * User: anasi
 * Date: 9/12/2019
 * Time: 11:37 PM
 */

namespace App\Http\Controllers;

use App\Codes;
use App\User_details;
use Illuminate\Http\Request;

class CreditInfo_controller extends Controller{
    public function __construct(){
    }

    public function setCreditInfo(Request $request){
        $user_id = 1;

        $cr_9312_002= [null];
        $cr_9312_003= [null];
        $cr_9312_004= [null];
//     dd($request->all());
        if($request->get('cr_9312_001') === '1'){
            $lifeInsurance = $request->get('cr_insurance');
            foreach($lifeInsurance as $life){
                    $cr_9312_002[] = $life['cr_9312_002'];
                    $cr_9312_003[] = $life['cr_9312_003'];
                    $cr_9312_004[] = $life['cr_9312_004'];
            }
        }
//        if(!empty($lifeInsurance)) {}
            $cr_9312 = array_sum($cr_9312_003);

            $cr_9312_004 = array_sum($cr_9312_004);

        $cr_9312 = min($cr_9312, 20000000);
        $cr_93121_002 = min($cr_9312, 150000);

//           $codes = ['cr_9004_001', 'cr_9004_002', 'cr_9004_003']

        $codes = ['cr_9312_001','cr_9312_002', 'cr_9312_003', 'cr_9312_004', 'cr_9312', 'cr_93121_002', 'cr_93121_001', 'cr_93121_002', 'cr_93121_003',];

//        $req = [$request->get('cr_9004_001'), $request->get('cr_9004_002'), $request->get('cr_9004_003'),]

        $req = [ $request->get('cr_9312_001'), serialize($cr_9312_002), serialize($cr_9312_003), $cr_9312_004, $cr_9312, $cr_93121_002, $request->get('cr_93121_001'), $request->get('cr_93121_002'), $request->get('cr_93121_003')];

        foreach($codes as $key => $code){
//            $code_id = $this->getCodeId($code);
            $insert = User_details::updateOrCreate(array('user_id' => $user_id, 'code_id' => $code), array('value' => $req[$key]));
        }

    }

    public function getCreditInfo(Request $request){

    }

    function getCodeId($code){
        $code_id = Codes::where('code', $code)->pluck('code_id');
        return $code_id;
    }
}
