<?php
/**
 * Created by PhpStorm.
 * User: anasi
 * Date: 9/13/2019
 * Time: 11:15 AM
 */

namespace App\Http\Controllers;

use App\User_details;
use App\Codes;
use Illuminate\Http\Request;

class IncomeInfo_controller extends Controller{
    public function __construct(){
    }

    public function setIncomeInfo(Request $request){
        $insert = '';
        $user_id = 1;

        $sa_1009 = $request->get('sa_1000_800') + $request->get('sa_1000_100') + $request->get('sa_1000_110');

        $sa_1049 = $request->get('sa_1000_101') + $request->get('sa_1000_102') + $request->get('sa_1000_103') + $request->get('sa_1000_104') + $request->get('sa_1000_105') + $request->get('sa_1000_106') + $request->get('sa_1000_107');

        $sa_1059 = $request->get('sa_1000_108');

        $sa_1089_per = 0;
        if($request->get('sa_1000_202'))
            $sa_1089_per = $this->percentageComp(45, $request->get('sa_1000_100'), $request->get('sa_1000_202_1'));

        $sa_1000_252 = $request->get('sa_1000_252') / 100;

        /*Check if loan is greater than 1million then proceed*/
        $var = ($request->get('sa_1000_252') + $request->get('sa_1000_252')) / 2;
        $sa_interest = 0;
        if($var < 1000000){
            $sa_1000_252_1 = 0.1 - $sa_1000_252;
            if($request->get('sa_1000_252') >= 0.1)
                $sa_1000_252_1 = 0;

            $sa_interest = ($var) * $sa_1000_252_1;
        }

        $sa_502_503 = ($request->get('sa_1000_502')) - ($request->get('sa_1000_503'));
        if($sa_502_503 <= 0)
            $sa_502_503 = 0;

        $provident302 = 0;
        $provident302Type = $request->get('sa_1000_301');
        if($provident302Type === 'govt' || $provident302Type === 'unrecognized')
            $provident302 = $request->get('sa_1000_302');



        $sa_1089 = $request->get('sa_1000_201') + $sa_1089_per + $request->get('sa_1000_203_1') + $sa_interest + $request->get('sa_1000_209_1') + $request->get('sa_1000_302') + $request->get('sa_1000_303') + $request->get('sa_1000_210_1') + $request->get('sa_1000_211_1') + $request->get('sa_1000_203') + $sa_502_503 + $this->connivanceAllowance($request->get('sa_1000_206'), $request->get('sa_1000_205'), $request->get('sa_1000_207'), $request->get('sa_1000_208'));

        $sa_1000_401 = $request->get('sa_1000_401');
        if($request->get('sa_1000_401_') === 'unrecognized')
            $sa_1000_401 = 0;

        $sa_1099 = $sa_1000_401 + $request->get('sa_1000_402') + $request->get('sa_1000_403') + $request->get('sa_1000_404');

        $sa_1000 = $sa_1009 + $sa_1049 + $sa_1059 + $sa_1089 + $sa_1099;

        /*Exemptions*/
        /*next to 1049*/

        $medical = $request->get('sa_1000_101');
        if($request->get('sa_1000_101'))
            if($medical > $this->percentage($request->get('sa_1000_100'), 10))
                $medical = $this->percentage($request->get('sa_1000_100'), 10);

        /*next to 1099*/
        $gratuityType = $request->get('sa_1000_402_1');
        if($gratuityType === 'commissioner' || $gratuityType === 'govt')
            $gratuity = $request->get('sa_1000_402'); elseif($gratuityType === 'board'){
            $gratuity = $request->get('sa_1000_402');
            if($gratuity > 300000)
                $gratuity = 300000;
        } else{
            $gratuity = $request->get('sa_1000_402') / 2;
            if($gratuity > 75000)
                $gratuity = 75000;
        }

        $provident = 0;
        $providentType = $request->get('sa_1000_401_1');
        if($providentType === 'govt' || $providentType === 'recognized')
            $provident = $request->get('sa_1000_401');

        /*next to 1089*/
        $sa_1089_1 = 0;
        if($request->get('sa_1000_302'))
            $sa_1089_1 = min($request->get('sa_1000_302'), 150000, ($request->get('sa_1000_100')/10));

        $sa_1089_1a = 0;
        if($request->get('sa_1000_303'))
            $sa_1089_1a = min($request->get('sa_1000_303'), ($request->get('sa_1000_100')/3));


        $req = [$request->get('sa_1000_001'), $request->get('sa_1000_002'), $request->get('sa_1000_003'), $request->get('sa_1000_004'), $request->get('sa_1000_005'), $request->get('sa_1000_006'), $request->get('sa_1000_007'), $request->get('sa_1000_008'), $request->get('sa_1000_009'), $request->get('sa_1000_010'), $request->get('sa_1000_100'), $request->get('sa_1000_101'), $request->get('sa_1000_102'), $request->get('sa_1000_103'), $request->get('sa_1000_104'), $request->get('sa_1000_105'), $request->get('sa_1000_106'), $request->get('sa_1000_107'), $request->get('sa_1000_108'), $request->get('sa_1000_109'), $request->get('sa_1000_110'), $request->get('sa_1000_900'), $request->get('sa_1000_901'), $request->get('sa_1000_201'), $request->get('sa_1000_202'), $request->get('sa_1000_202_1'), $request->get('sa_1000_203'), $request->get('sa_1000_203_1'), $request->get('sa_1000_204'), $request->get('sa_1000_205'), $request->get('sa_1000_206'), $request->get('sa_1000_207'), $request->get('sa_1000_208'), $request->get('sa_1000_209'), $request->get('sa_1000_209_1'), $request->get('sa_1000_210'), $request->get('sa_1000_210_1'), $request->get('sa_1000_211_1'), $request->get('sa_1000_211_1'), $request->get('sa_1000_250'), $request->get('sa_1000_251'), $request->get('sa_1000_252'), $request->get('sa_1000_253'), $request->get('sa_1000_300'), $request->get('sa_1000_301'), $request->get('sa_1000_302'), $request->get('sa_1000_400'), $request->get('sa_1000_401'), $request->get('sa_1000_402'), $request->get('sa_1000_403'), $request->get('sa_1000_404'), $request->get('sa_1000_500'), $request->get('sa_1000_501'), $request->get('sa_1000_502'), $request->get('sa_1000_503'), $request->get('sa_1000_600'), $request->get('sa_1000_601'), $sa_1009, $sa_1049, $sa_1059, $sa_1089, $sa_1089_per, $sa_1099, $sa_1000, $provident302, $medical,$gratuityType, $gratuity, $provident, $providentType, $sa_1089_1, $sa_1089_1a, $request->get('sa_1000_800')];

        $codes = ['sa_1000_001', 'sa_1000_002', 'sa_1000_003', 'sa_1000_004', 'sa_1000_005', 'sa_1000_006', 'sa_1000_007', 'sa_1000_008', 'sa_1000_009', 'sa_1000_010', 'sa_1000_100', 'sa_1000_101', 'sa_1000_102', 'sa_1000_103', 'sa_1000_104', 'sa_1000_105', 'sa_1000_106', 'sa_1000_107', 'sa_1000_108', 'sa_1000_109', 'sa_1000_110', 'sa_1000_900', 'sa_1000_901', 'sa_1000_201', 'sa_1000_202', 'sa_1000_202_1', 'sa_1000_203', 'sa_1000_203_1', 'sa_1000_204', 'sa_1000_205', 'sa_1000_206', 'sa_1000_207', 'sa_1000_208', 'sa_1000_209', 'sa_1000_209_1', 'sa_1000_210', 'sa_1000_210_1', 'sa_1000_211', 'sa_1000_211_1', 'sa_1000_250', 'sa_1000_251', 'sa_1000_252', 'sa_1000_253', 'sa_1000_300', 'sa_1000_301', 'sa_1000_302', 'sa_1000_400', 'sa_1000_401', 'sa_1000_402', 'sa_1000_403', 'sa_1000_404', 'sa_1000_500', 'sa_1000_501', 'sa_1000_502', 'sa_1000_503', 'sa_1000_600', 'sa_1000_601', 'sa_1009', 'sa_1049', 'sa_1059', 'sa_1089', 'sa_1089_per', 'sa_1099', 'sa_1000', 'provident302', 'medical', 'gratuityType', 'gratuity', 'provident', 'providentType', 'sa_1089_1', 'sa_1089_1a', 'sa_1000_800'];

        foreach($codes as $key => $code){
            //            $code_id = $this->getCodeId($code);
            if(!is_null($req[$key]))
                $insert = User_details::updateOrCreate(array('user_id' => $user_id, 'code_id' => $code), array('value' => $req[$key]));
        }
        return response()->json([$insert]);
    }

    function getCodeId($code){
        $code_id = Codes::where('code', $code)->pluck('code_id');
        return $code_id;
    }

    function percentageComp($partialValue, $totalValue, $otherValue){
        if($totalValue === 0)
            return 0;

        $val = ($partialValue / 100) * $totalValue;

        if($val > $otherValue)
            return $val; else
            return $otherValue;
    }

    public function percentage($sa_206, $per){
        return ($per / 100) * $sa_206;
    }

    public function dateComp($date, $june_30){
        return $date;
    }

    function connivanceAllowance($sa_206, $partly, $afterJune, $dateSelected){
        if($partly)
            if($afterJune)
                return $this->percentage($sa_206, 5) * date_diff(date_create($dateSelected), date_create('2019-06-30')) / 365; else
                return $this->percentage($sa_206, 5); else if($afterJune)
            return $this->percentage($sa_206, 10) * date_diff(date_create($dateSelected), date_create('2019-06-30')) / 365; else
            return $this->percentage($sa_206, 10);
    }
}

