<?php
/**
 * Created by PhpStorm.
 * User: anasi
 * Date: 9/13/2019
 * Time: 4:14 PM
 */

namespace App\Http\Controllers;

use App\User_details;
use App\Codes;
use Illuminate\Http\Request;

class WealthInfo_controller extends Controller{
    public function __construct(){
    }

    public function setWealthInfo(Request $request){
        $insert = '';
        $user_id = 1;
//       dd($request->all());
        $account_info = null;
        $account_sum = null;
        $we_7006_007_sum = 0;
        $we_7006_009_sum = 0;
        $we_7006_010_sum = 0;
        $we_7006_012_sum = 0;
        $we_7006_013_sum = 0;
        $we_7006_014_sum = 0;
        $we_7006_015_sum = 0;
        $we_7006_016_sum = 0;
        if($request->get('we_7006_001') === '1'){
            $bankAccounts = $request->get('we_accounts');
//        dd($bankAccounts);
//            foreach($bankAccounts as $account){
//                $we_7006_002[] = $account['we_7006_002'];
//                $we_7006_003[] = $account['we_7006_003'];
//                $we_7006_004[] = $account['we_7006_004'];
//                $we_7006_005[] = $account['we_7006_005'];
//                $we_7006_006[] = $account['we_7006_006'];
//                $we_7006_007[] = $account['we_7006_007'];
//                $we_7006_008[] = $account['we_7006_008'];
//                $we_7006_009[] = $account['we_7006_009'];
//                $we_7006_010[] = $account['we_7006_010'];
//                $we_7006_011[] = $account['we_7006_011'];
//                $we_7006_012[] = $account['we_7006_012'];
//                $we_7006_013[] = $account['we_7006_013'];
//                $we_7006_014[] = $account['we_7006_014'];
//                $we_7006_015[] = $account['we_7006_015'];
//                $we_7006_016[] = $account['we_7006_016'];
//            }

            foreach($bankAccounts as $account){

                $account_info[] = array('we_7006_002' => $account['we_7006_002'], 'we_7006_003' => $account['we_7006_003'],
                'we_7006_004' => $account['we_7006_004'],'we_7006_005' => $account['we_7006_005'] ,
                'we_7006_006' => $account['we_7006_006'], 'we_7006_007' => $account['we_7006_007'],
                'we_7006_008' => $account['we_7006_008'], 'we_7006_009' => $account['we_7006_009'],
                'we_7006_010' => $account['we_7006_010'], 'we_7006_011' => $account['we_7006_011'],
                'we_7006_012' => $account['we_7006_012'], 'we_7006_013' => $account['we_7006_013'],
                'we_7006_014' => $account['we_7006_014'], 'we_7006_015' => $account['we_7006_015'],
                 'we_7006_016' => $account['we_7006_016'], 'selectedOption' => $account['selectedOption']);

                    $sum[] = $account['we_7006_008'];
                   $account_sum = array_sum($sum);

                   $we_7006_007_sum1[] = $account['we_7006_007'];
                   $we_7006_009_sum1[] = $account['we_7006_009'];
                   $we_7006_010_sum1[] = $account['we_7006_010'];
                   $we_7006_012_sum1[] = $account['we_7006_012'];
                   $we_7006_013_sum1[] = $account['we_7006_013'];
                   $we_7006_014_sum1[] = $account['we_7006_014'];
                   $we_7006_015_sum1[] = $account['we_7006_015'];
                   $we_7006_016_sum1[] = $account['we_7006_016'];

                   $we_7006_007_sum = array_sum($we_7006_007_sum1);
                   $we_7006_009_sum = array_sum($we_7006_009_sum1);
                   $we_7006_010_sum = array_sum($we_7006_010_sum1);
                   $we_7006_012_sum = array_sum($we_7006_012_sum1);
                   $we_7006_013_sum = array_sum($we_7006_013_sum1);
                   $we_7006_014_sum = array_sum($we_7006_014_sum1);
                   $we_7006_015_sum = array_sum($we_7006_015_sum1);
                   $we_7006_016_sum = array_sum($we_7006_016_sum1);




            }



        }

        $vehicle_info = null;
        $vehicle_sum = null;
        $we_7007_007_1_sum  = 0;
        $we_7007_008_1_sum = 0;
        $we_7007_009_1_sum = 0;
        $we_7007_010_1_sum = 0;
        $we_7007_011_1_sum = 0;
        $we_7007_012_1_sum = 0;
        if($request->get('we_7007_001') === '1'){

            $vehicles = $request->get('we_vehicles');
//          dd($vehicles);

            foreach($vehicles as $vehicle){

                $vehicle_info[] = array('we_7007_002' => $vehicle['we_7007_002'], 'we_7007_003' => $vehicle['we_7007_003'],
                    'we_7007_004' => $vehicle['we_7007_004'],'we_7007_price' => $vehicle['we_7007_price'],'we_7007_005' => $vehicle['we_7007_005'],
                    'we_7007_006' => $vehicle['we_7007_006'],  'we_7007_007' => $vehicle['we_7007_007'], 'we_7007_007_1' => $vehicle['we_7007_007_1'],
                    'we_7007_008' => $vehicle['we_7007_008_1'], 'we_7007_008_1' => $vehicle['we_7007_008_1'],
                    'we_7007_009' => $vehicle['we_7007_009'], 'we_7007_009_1' => $vehicle['we_7007_009_1'],
                    'we_7007_010' => $vehicle['we_7007_010'], 'we_7007_010_1' => $vehicle['we_7007_010_1'],
                    'we_7007_011' => $vehicle['we_7007_011'], 'we_7007_011_1' => $vehicle['we_7007_011_1'],
                    'we_7007_012' => $vehicle['we_7007_012'], 'we_7007_012_1' => $vehicle['we_7007_012_1']
                    );

                $vehicle_sm[] = $vehicle['we_7007_price'];
                $we_7007_007_1_sum1[] = $vehicle['we_7007_007_1'];
                $we_7007_008_1_sum1[] = $vehicle['we_7007_008_1'];
                $we_7007_009_1_sum1[] = $vehicle['we_7007_009_1'];
                $we_7007_010_1_sum1[] = $vehicle['we_7007_010_1'];
                $we_7007_011_1_sum1[] = $vehicle['we_7007_011_1'];
                $we_7007_012_1_sum1[] = $vehicle['we_7007_012_1'];




                $vehicle_sum = array_sum($vehicle_sm);
                $we_7007_007_1_sum = array_sum($we_7007_007_1_sum1);
                $we_7007_008_1_sum = array_sum($we_7007_008_1_sum1);
                $we_7007_009_1_sum = array_sum($we_7007_009_1_sum1);
                $we_7007_010_1_sum = array_sum($we_7007_010_1_sum1);
                $we_7007_011_1_sum = array_sum($we_7007_011_1_sum1);
                $we_7007_012_1_sum = array_sum($we_7007_012_1_sum1);
            }
        }

        $loan_info = null;
        $loan_sum = null;
        if($request->get('we_7007_101') === '1'){
            $loans = $request->get('we_loans');

            foreach($loans as $loan){

                $loan_info[] = array('we_7007_102' => $loan['we_7007_102'], 'we_7007_103' => $loan['we_7007_103'], 'we_7007_105' => $loan['we_7007_105'] );

                 $loan_sum1[] = $loan['we_7007_105'];
                $loan_sum = array_sum($loan_sum1);

            }

        }

        $asset_name_info = null;
        $asset_sum = 0;
        if($request->get('we_7014_001') === '1'){

            $others_name_asset = $request->get('we_others_name_asset');
//           dd($others_name_asset);
            foreach($others_name_asset as $asset_name){

                $asset_name_info[] = array('we_7014_002' => $asset_name['we_7014_002'], 'we_7014_003' => $asset_name['we_7014_003'], 'we_7014_004' => $asset_name['we_7014_004'],
                    'we_7014_005' => $asset_name['we_7014_005'], );
                 $asset_sum1[] = $asset_name['we_7014_003'];
                 $asset_sum = array_sum($asset_sum1);
            }

        }

        $outer_asset_info = null;
        $outer_asset_sum = 0;
        if($request->get('we_7016_001') === '1'){

            $outer_asset = $request->get('we_outside_asset');
//            dd($outer_asset);
            foreach ($outer_asset as $outAsset){

                $outer_asset_info[] = array('we_7016_002' => $outAsset['we_7016_002'], 'we_7016_003' => $outAsset['we_7016_003'],
                    'we_7016_004' => $outAsset['we_7016_004'], 'we_7016_005' => $outAsset['we_7016_005']);

                $outer_asset_sum1[] = $outAsset['we_7016_005'];
                $outer_asset_sum = array_sum($outer_asset_sum1);
            }

        }

        $outer_company_info = null;
        $outer_company_sum = 0;

        if($request->get('we_7018_001') === '1'){

            $outer_companies = $request->get('we_foreign_company');

            foreach ($outer_companies as $outer_company ){

                $outer_company_info[] = array('we_7018_002' => $outer_company['we_7018_002'], 'we_7018_003' => $outer_company['we_7018_003'],
                    'we_7018_004' => $outer_company['we_7018_004'], 'we_7018_005' => $outer_company['we_7018_005'], 'we_7018_006' => $outer_company['we_7018_006'],
                    'we_7018_007' => $outer_company['we_7018_007'], 'we_7018_008' => $outer_company['we_7018_008'],);

                $outer_company_sum1[] = $outer_company['we_7018_007'];
                $outer_company_sum = array_sum($outer_company_sum1);
              }
        }


        $payable_info = null;
        $payable_sum = 0;

        if($request->get('we_7021_001') === '1'){
            $payables = $request->get('we_payables');
            foreach($payables as $payable){
                $payable_info[] = array( 'we_7021_002' => $payable['we_7021_002'], 'we_7021_003' => $payable['we_7021_003'],
                    'we_7021_004' => $payable['we_7021_004'], 'we_7021_005' => $payable['we_7021_005']);


                $payable_sum1[] = $payable['we_7021_005'];
                $payable_sum = array_sum($payable_sum1);
            }
        }


//dd($account_info);
        $account_json = json_encode($account_info);
        $vehicle_json = json_encode($vehicle_info);
        $loan_json = json_encode($loan_info);
        $asset_name_info_json = json_encode($asset_name_info);
        $outer_asset_json = json_encode($outer_asset_info);
        $outer_company_json = json_encode($outer_company_info);
        $payable_json = json_encode($payable_info);

//        $we_7006_002 = json_encode($we_7006_002);
//
//        $we_7006_003 = json_encode($we_7006_003);
//        $we_7006_004 = json_encode($we_7006_004);
//        $we_7006_005 = json_encode($we_7006_005);
//        $we_7006_006 = json_encode($we_7006_006);
//        $we_7006_007 = json_encode($we_7006_007);
//        $we_7006_008 = json_encode($we_7006_008);
////        dd($we_7006_008);
//        $we_7006_009 = json_encode($we_7006_009);
//        $we_7006_010 = json_encode($we_7006_010);
//        $we_7006_011 = json_encode($we_7006_011);
//        $we_7006_012 = json_encode($we_7006_012);
//        $we_7006_013 = json_encode($we_7006_013);
//        $we_7006_014 = json_encode($we_7006_014);
//        $we_7006_015 = json_encode($we_7006_015);
//        $we_7006_016 = json_encode($we_7006_016);


        if($request->get('we_7006_100') === '1'){
            $certificates = $request->get('we_certificates');
            foreach($certificates as $certificate){
                $we_7006_101[] = $certificate['we_7006_101'];
                $we_7006_102[] = $certificate['we_7006_102'];
                $we_7006_103[] = $certificate['we_7006_103'];
                $we_7006_104[] = $certificate['we_7006_104'];
                $we_7006_105[] = $certificate['we_7006_105'];
                $we_7006_106[] = $certificate['we_7006_106'];
                $we_7006_107[] = $certificate['we_7006_107'];
                $we_7006_108[] = $certificate['we_7006_108'];
            }
        }


//        $we_7006_002, $we_7006_003, $we_7006_004, $we_7006_005, $we_7006_006, $we_7006_007, $we_7006_008, $we_7006_009,$we_7006_010, $we_7006_011, $we_7006_012, $we_7006_013, $we_7006_014, $we_7006_015, $we_7006_016

        $req = [$request->get('we_703002'), $request->get('we_7006_001'), $account_json, $account_sum,
            $vehicle_json, $vehicle_sum, $loan_json, $loan_sum, $asset_name_info_json, $asset_sum , $outer_asset_json,
            $outer_asset_sum, $outer_company_json, $outer_company_sum, $payable_json, $payable_sum, $we_7006_007_sum,
            $we_7006_009_sum, $we_7006_010_sum, $we_7006_012_sum, $we_7006_013_sum, $we_7006_014_sum, $we_7006_015_sum, $we_7006_016_sum,
            $we_7007_007_1_sum, $we_7007_008_1_sum, $we_7007_009_1_sum, $we_7007_010_1_sum, $we_7007_011_1_sum, $we_7007_012_1_sum,


            $request->get('we_7006_100'), $request->get('we_7006_101'), $request->get('we_7006_102'),
            $request->get('we_7006_103'), $request->get('we_7006_104'), $request->get('we_7006_105'),
            $request->get('we_7006_106'), $request->get('we_7006_107'), $request->get('we_7006_108'),
            $request->get('we_7007_001'), $request->get('we_7007_002'), $request->get('we_7007_003'),
            $request->get('we_7007_004'), $request->get('we_7007_005'), $request->get('we_7007_006'),
//            $request->get('we_7007_007'), $request->get('we_7007_007_1'), $request->get('we_7007_008'),
//            $request->get('we_7007_008_1'), $request->get('we_7007_009'), $request->get('we_7007_009_1'),
//            $request->get('we_7007_010'), $request->get('we_7007_010_1'), $request->get('we_7007_011'),
//            $request->get('we_7007_011_1'), $request->get('we_7007_012'), $request->get('we_7007_012_1'),
            $request->get('we_7007_101'), $request->get('we_7007_102'), $request->get('we_7007_103'),
            $request->get('we_7007_104'), $request->get('we_7007_105'), $request->get('we_7014_001'),
            $request->get('we_7014_002'), $request->get('we_7014_003'), $request->get('we_7014_004'),
            $request->get('we_7014_005'), $request->get('we_7014_006'), $request->get('we_7018_001'),
            $request->get('we_7018_002'), $request->get('we_7018_003'), $request->get('we_7018_004'),
            $request->get('we_7018_005'), $request->get('we_7018_006'), $request->get('we_7018_007'),
            $request->get('we_7018_008'), $request->get('we_7006_016'),
            $request->get('we_7004'),
            $request->get('we_7005'), $request->get('we_7009'), $request->get('we_7010'),
            $request->get('we_7011'), $request->get('we_7013'),

            $request->get('we_7051'), $request->get('we_7052'),$request->get('we_7055'),
            $request->get('we_7055'),$request->get('we_7056'),$request->get('we_7058'),
            $request->get('we_7059'),$request->get('we_7060'),$request->get('we_7061'),
            $request->get('we_7066'),$request->get('we_7070'),$request->get('we_7071'),
            $request->get('we_7072'),$request->get('we_7073'),$request->get('we_7076'),
            $request->get('we_7087'),$request->get('we_7088')
            ];

        //        'we_7006_002', 'we_7006_003', 'we_7006_004', 'we_7006_005', 'we_7006_006', 'we_7006_007', 'we_7006_008', 'we_7006_009', 'we_7006_010', 'we_7006_011', 'we_7006_012', 'we_7006_013', 'we_7006_014', 'we_7006_015', 'we_7006_016'
//        dd($bankAccounts, $request->all() ,$req);
        $codes = [
            'we_703002', 'we_7006_001' ,'account_info', 'account_sum', 'vehicle_info', 'vehicle_sum', 'loan_info',
            'loan_sum', 'asset_info', 'asset_sum','outer_asset_info', 'outer_asset_sum', 'outer_company_info',
            'outer_company_sum' , 'payable_info', 'payable_sum', 'we_7006_007', 'we_7006_009','we_7006_010', 'we_7006_012',
            'we_7006_013', 'we_7006_014', 'we_7006_015', 'we_7006_016', 'we_7007_007_1', 'we_7007_008_1', 'we_7007_009_1',
            'we_7007_010_1', 'we_7007_011_1','we_7007_012_1',

            'we_7006_100', 'we_7006_101', 'we_7006_102',
            'we_7006_103', 'we_7006_104', 'we_7006_105', 'we_7006_106', 'we_7006_107', 'we_7006_108', 'we_7007_001',
            'we_7007_002', 'we_7007_003', 'we_7007_004', 'we_7007_005', 'we_7007_006',

            //'we_7007_007', 'we_7007_007_1', 'we_7007_008', 'we_7007_008_1', 'we_7007_009', 'we_7007_009_1', 'we_7007_010', 'we_7007_010_1', 'we_7007_011',
//            'we_7007_011_1', 'we_7007_012', 'we_7007_012_1'

            'we_7007_101', 'we_7007_102', 'we_7007_103', 'we_7007_104',
            'we_7007_105', 'we_7014_001', 'we_7014_002', 'we_7014_003', 'we_7014_004', 'we_7014_005', 'we_7014_006',
            'we_7018_001', 'we_7018_002', 'we_7018_003', 'we_7018_004', 'we_7018_005', 'we_7018_006', 'we_7018_007',
            'we_7018_008', 'we_7006_016', 'we_7004', 'we_7005', 'we_7009' ,'we_7010' ,'we_7011' ,'we_7013',

            'we_7051', 'we_7055', 'we_7056', 'we_7058', 'we_7059', 'we_7060', 'we_7061', 'we_7066', 'we_7070', 'we_7071',
            'we_7072', 'we_7073', 'we_7076', 'we_7087', 'we_7088'

        ];

        foreach($codes as $key => $code){
//            $code_id = $this->getCodeId($code);
            if(!is_null($req[$key]))
                $insert = User_details::updateOrCreate(array('user_id' => $user_id, 'code_id' => $code), array('value' => $req[$key]));


         }
//              dd($insert);
        return response()->json([$insert]);
    }

    function getCodeId($code){
        $code_id = Codes::where('code', $code)->pluck('code_id');
        return $code_id;
    }
}
