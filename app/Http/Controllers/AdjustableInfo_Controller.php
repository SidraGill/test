<?php


namespace App\Http\Controllers;

use App\User_details;
use Illuminate\Http\Request;

class AdjustableInfo_Controller extends Controller{
    public function __construct(){
    }

    function setAdjustableInfo(Request $request){
        $user_id = 1;
        $insert = '';


        $codes = ['adj_64140101_001', 'adj_64140101_002', 'adj_64140101_003', 'adj_64140101_004', 'adj_64140101_005', 'adj_64150001_001', 'adj_64150001_002', 'adj_64150001_003', 'adj_64150001_004', 'adj_64150001_005', 'adj_64150002_001', 'adj_64150002_002', 'adj_64150002_003', 'adj_64150002_004', 'adj_64150002_005', 'adj_64150003_001', 'adj_64150003_002', 'adj_64150003_003', 'adj_64150003_004', 'adj_64150003_005', 'adj_64150004_001', 'adj_64150004_002', 'adj_64150004_003', 'adj_64150004_004', 'adj_64150004_005', 'adj_64150005_001', 'adj_64150005_002', 'adj_64150005_003', 'adj_64150005_004', 'adj_64150005_005', 'adj_64150101', 'adj_64150101_1', 'adj_64150201', 'adj_64150201_1', 'adj_64151201', 'adj_64151201_1', 'adj_64150401', 'adj_64150401_1', 'adj_64150901', 'adj_64150901_1'];

        $req = [$request->get('adj_64140101_001'), $request->get('adj_64140101_002'), $request->get('adj_64140101_003'), $request->get('adj_64140101_004'), $request->get('adj_64140101_005'), $request->get('adj_64150001_001'), $request->get('adj_64150001_002'), $request->get('adj_64150001_003'), $request->get('adj_64150001_004'), $request->get('adj_64150001_005'), $request->get('adj_64150002_001'), $request->get('adj_64150002_002'), $request->get('adj_64150002_003'), $request->get('adj_64150002_004'), $request->get('adj_64150002_005'), $request->get('adj_64150003_001'), $request->get('adj_64150003_002'), $request->get('adj_64150003_003'), $request->get('adj_64150003_004'), $request->get('adj_64150003_005'), $request->get('adj_64150004_001'), $request->get('adj_64150004_002'), $request->get('adj_64150004_003'), $request->get('adj_64150004_004'), $request->get('adj_64150004_005'), $request->get('adj_64150005_001'), $request->get('adj_64150005_002'), $request->get('adj_64150005_003'), $request->get('adj_64150005_004'), $request->get('adj_64150005_005'), $request->get('adj_64150101'), $request->get('adj_64150101_1'), $request->get('adj_64150201'), $request->get('adj_64150201_1'), $request->get('adj_64151201'), $request->get('adj_64151201_1'), $request->get('adj_64150401'), $request->get('adj_64150401_1'), $request->get('adj_64150901'), $request->get('adj_64150901_1')];


        foreach($codes as $key => $code){
            //            $code_id = $this->getCodeId($code);
            if(!is_null($req[$key]))
                $insert = User_details::updateOrCreate(array('user_id' => $user_id, 'code_id' => $code), array('value' => $req[$key]));
        }

        return response()->json([$insert]);
    }

}