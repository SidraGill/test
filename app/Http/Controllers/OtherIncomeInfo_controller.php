<?php
/**
 * Created by PhpStorm.
 * User'), anasi
 * Date'), 9/18/2019
 * Time'), 12:37 PM
 */

namespace App\Http\Controllers;

use App\User_details;
use Illuminate\Http\Request;

class OtherIncomeInfo_controller extends Controller{
    public function __construct(){
    }

    public function setOtherIncomeInfo(Request $request){
        $user_id = 2;
        $insert = '';

        $oth_5028 = $request->get('oth_5028_001') + $request->get('oth_5028_002') + $request->get('oth_5028_003') + $request->get('oth_5028_004') + $request->get('oth_5028_005') + $request->get('oth_5028_006');

        $codes = ['oth_5003041', 'oth_5028_001', 'oth_5028_001_1', 'oth_5028_001_2', 'oth_5028_001_3', 'oth_5028_002', 'oth_5028_002_1', 'oth_5028_002_2', 'oth_5028_002_3', 'oth_5028_003', 'oth_5028_003_1', 'oth_5028_003_2', 'oth_5028_003_3', 'oth_5028_004', 'oth_5028_004_1', 'oth_5028_004_2', 'oth_5028_004_3', 'oth_5028_005', 'oth_5028_005_1', 'oth_5028_005_2', 'oth_5028_005_3', 'oth_5028_006', 'oth_5028_006_1', 'oth_5028_006_2', 'oth_5028_006_3', 'oth_6000_001', 'oth_6000_002', 'oth_6000_003', 'oth_6000_004', 'oth_6100_001', 'oth_6100_002', 'oth_6100_003', 'oth_6100_004', 'oth_5007_001', 'oth_5007_002', 'oth_5028_100', 'oth_5028_101', 'oth_5028_102', 'oth_5028_103', 'oth_5028_104', 'oth_5028'];

        $req = [$request->get('oth_5003041'), $request->get('oth_5028_001'), $request->get('oth_5028_001_1'), $request->get('oth_5028_001_2'), $request->get('oth_5028_001_3'), $request->get('oth_5028_002'), $request->get('oth_5028_002_1'), $request->get('oth_5028_002_2'), $request->get('oth_5028_002_3'), $request->get('oth_5028_003'), $request->get('oth_5028_003_1'), $request->get('oth_5028_003_2'), $request->get('oth_5028_003_3'), $request->get('oth_5028_004'), $request->get('oth_5028_004_1'), $request->get('oth_5028_004_2'), $request->get('oth_5028_004_3'), $request->get('oth_5028_005'), $request->get('oth_5028_005_1'), $request->get('oth_5028_005_2'), $request->get('oth_5028_005_3'), $request->get('oth_5028_006'), $request->get('oth_5028_006_1'), $request->get('oth_5028_006_2'), $request->get('oth_5028_006_3'), $request->get('oth_6000_001'), $request->get('oth_6000_002'), $request->get('oth_6000_003'), $request->get('oth_6000_004'), $request->get('oth_6100_001'), $request->get('oth_6100_002'), $request->get('oth_6100_003'), $request->get('oth_6100_004'), $request->get('oth_5007_001'), $request->get('oth_5007_002'), $request->get('oth_5028_100'), $request->get('oth_5028_101'), $request->get('oth_5028_102'), $request->get('oth_5028_103'), $request->get('oth_5028_104'), $oth_5028];

        foreach($codes as $key => $code){
            //            $code_id = $this->getCodeId($code);
            if(!is_null($req[$key]))
                $insert = User_details::updateOrCreate(array('user_id' => $user_id, 'code_id' => $code), array('value' => $req[$key]));
        }
//        dd($insert);
        return response()->json([$insert]);

    }
}