<?php

namespace App\Http\Controllers;

use App\User_details;
use Illuminate\Http\Request;

class DeductionInfo_controller extends Controller{
    public function __construct(){
    }

    public function setDeductionInfo(Request $request){
        $user_id = 1;
        $insert = '';
        $totalIncome = 1000000;

        $de_9008 = min(($request->get('de_9008_002')*60000), $this->percentage($request->get('de_9008_003'), 5), $this->percentage($totalIncome, 25));


        $codes = ['de_9001_001' , 'de_9001_002' , 'de_9001_003' , 'de_9008_001' , 'de_9008_002' , 'de_9008_003' , 'de_9008_004', 'de_9008' , 'sa_1000_900'];

        $req = [
            $request->get('de_9001_001'), $request->get('de_9001_002'), $request->get('de_9001_003'), $request->get('de_9008_001'), $request->get('de_9008_002'), $request->get('de_9008_003'), $request->get('de_9008_004'), $request->get('sa_1000_900'), $de_9008
        ];


        foreach($codes as $key => $code){
            //            $code_id = $this->getCodeId($code);
            if(!is_null($req[$key]))
                $insert = User_details::updateOrCreate(array('user_id' => $user_id, 'code_id' => $code), array('value' => $req[$key]));
        }
        return response()->json([$insert]);
    }

    public function percentage($total, $per){
        return ($per / 100) * $total;
    }
}