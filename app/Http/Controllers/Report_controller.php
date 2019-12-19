<?php
/**
 * Created by PhpStorm.
 * User: anasi
 * Date: 9/14/2019
 * Time: 1:51 PM
 */


namespace App\Http\Controllers;

use App\User;
use App\Codes;
use App\User_details;
use Illuminate\Http\Request;

class Report_controller extends Controller{
    public function __construct(){
    }

    public function getReportData(Request $request){
//          dd($request->all());
         $user_id = 1;
        $data = array();
        $get = User_details::where('user_id', $user_id)->get();

//        $get1 = User_details::where('code_id', '=' , 'pr_2000_002_2')->first();
//         $agri_code = $get1->code_id;
//         $agri_value = json_decode($get1->value);


//        $we_7006_008 = User_details::where('code_id', '=' ,'we_7006_008')->first();
//         $we_008 = $we_7006_008->value;
//         dd(json_decode($we_008));
//        $pr_2000_003 = User_details::where('code_id', '=' ,'pr_2000_003')->first();
//        $pr_2000_004 = User_details::where('code_id', '=' , 'pr_2000_004')->first();
//        $pr_2000_005 = User_details::where('code_id', '=' , 'pr_2000_005')->first();
//        $pr_2000_101 = User_details::where('code_id', '=', 'pr_2000_101')->first();
//        $pr_2000_102 = User_details::where('code_id', '=', 'pr_2000_102')->first();
//
//
//         $pr_2000_002_1 = $pr_2000_002->code_id;
//         $pr_2000_002_2 = unserialize($pr_2000_002->value);
//     //  dd($pr2);
//         $pr_2000_003_1 = $pr_2000_003->code_id;
//         $pr_2000_003_2 = unserialize($pr_2000_003->value);
//
//        $pr_2000_004_1 = $pr_2000_004->code_id;
//        $pr_2000_004_2 = unserialize($pr_2000_004->value);
//
//         $pr_2000_005_1 = $pr_2000_005->code_id;
//         $pr_2000_005_2 = unserialize($pr_2000_005->value);
//
//         $pr_2000_101_1 = $pr_2000_101->code_id;
//         $pr_2000_101_2 = unserialize($pr_2000_101->value);
//
//        $pr_2000_102_1 = $pr_2000_102->code_id;
//         $pr_2000_102_2 = unserialize($pr_2000_102->value) ;
        // dd($pr_2000_003_2);

//        $code = [$pr_2000_002_1, $pr_2000_003_1, $pr_2000_004_1, $pr_2000_005_1, $pr_2000_101_1, $pr_2000_102_1  ];
////    dd($code);
//         $value = [$pr_2000_002_2, $pr_2000_003_2, $pr_2000_004_2 , $pr_2000_005_2  ,  $pr_2000_101_2 , $pr_2000_102_2 ] ;

//         dd($value);
//         array_push($pr1, 'code' , $pr_2000_003_1 );
//         array_push($pr1, 'value' , $pr_2000_003_2 );
//        foreach($pr2 as $p2){
//
//             $data1 = ['code' => $pr1 , 'value' => $p2];
////            array_push($data, ['value' => $p2]);
//        }
//       dd($pr1);
//        dd($get);
        foreach($get as $g){
            $data[] = array('code' => $g->code_id, 'value' => $g->value);
        }
//        array_push($data, ['code' => 'we_7006_008','value' => $we_008]);
//        dd($data);
//        array_push($data, ['code' => $agri_code ,'value' => $agri_value]);
//      dd(response()->json([$data, ['code' => $pr1 , 'value' => $pr2 ]]));

         return response()->json([$data]);
    }


//    public function getproperty(Request $request)
//    {
//        $properties = $request->get('pr_property');
//         dd($properties);
//    }
}