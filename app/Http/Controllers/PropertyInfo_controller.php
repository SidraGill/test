<?php
/**
 * Created by PhpStorm.
 * User: anasi
 * Date: 9/13/2019
 * Time: 3:06 PM
 */

namespace App\Http\Controllers;

use App\User_details;
use App\Codes;

use Illuminate\Http\Request;
use function Matrix\directsum;
use function MongoDB\BSON\toJSON;

class PropertyInfo_controller extends Controller{
    public function __construct(){
    }

    public function setPropertyInfo(Request $request){
        $insert = '';
        $user_id = 1;

//       dd($request->all());
        $properties = $request->get('pr_property');
//       dd($properties);

       /*
        * [
  0 => array:8 [
    "pr_2000_002" => "commercial"
    "pr_2000_003" => null
    "pr_2000_004" => "p-609 street 11 Faisalabad"
    "pr_2000_005" => "Faisalabad"
    "pr_2000_101" => "2019-11-07"
    "pr_2000_102" => "123456"
    "pr_64151101" => null
    "pr_64151951" => null
  ]
  1 => array:8 [
    "pr_2000_002" => "commercial"
    "pr_2000_003" => null
    "pr_2000_004" => "p-609999 street 11 Faisalabad"
    "pr_2000_005" => "Faisalabad"
    "pr_2000_101" => "2019-11-13"
    "pr_2000_102" => "123456790"
    "pr_64151101" => null
    "pr_64151951" => null
  ]*/
        /*foreach($properties as $property){

            $pr_2000_002[] = $property['pr_2000_002'];
            $pr_2000_003[] = $property['pr_2000_003'];
            $pr_2000_004[] = $property['pr_2000_004'];
            $pr_2000_005[] = $property['pr_2000_005'];
            $pr_2000_101[] = $property['pr_2000_101'];
            $pr_2000_102[] = $property['pr_2000_102'];
            $pr_64151101[] = $property['pr_64151101'];
            $pr_64151951[] = $property['pr_64151951'];
        }*/

//       dd($property);
            $agriculture = null;
            $commercial = null;
            $agri_sum = 0;
             $other_sum = 0;
            foreach($properties as $many){

                if($many['pr_2000_002'] === "agricultural"){
                  $agriculture[] = array('pr_2000_002' => $many['pr_2000_002'], 'pr_2000_003' => $many['pr_2000_003'], 'pr_2000_004' => $many['pr_2000_004'], 'pr_2000_005' => $many['pr_2000_005'], 'pr_2000_101' => $many['pr_2000_101'], 'pr_2000_102' => $many['pr_2000_102'] );
                }else{
                    $commercial[] = array('pr_2000_002' => $many['pr_2000_002'], 'pr_2000_003' => $many['pr_2000_003'], 'pr_2000_004' => $many['pr_2000_004'], 'pr_2000_005' => $many['pr_2000_005'], 'pr_2000_101' => $many['pr_2000_101'], 'pr_2000_102' => $many['pr_2000_102'] );
                }

            }

        foreach($properties as  $many) {
            if ($many['pr_2000_002'] === "agricultural") {
                $sum1[] = $many['pr_2000_102'];
                $agri_sum = array_sum($sum1);
            }
            else {
                $sum2[] = $many['pr_2000_102'];
                $other_sum = array_sum($sum2);
            }
        }

//        dd($agri);
//        dd($commercial);
        $agriculture = json_encode($agriculture);

        $commercial =  json_encode($commercial);
//        dd($agriculture, $commercial, gettype($commercial), 'exit');


        $pr_2099 = $request->get('pr_2098');

        $date1=date_create($request->get('pr_date'));
        $date2=date_create("2019-06-30");
        $diff=date_diff($date2,$date1);
        $diff = $diff->format("%R%a days");

        $pr_2002 = $request->get('pr_2002_001');
        if($diff < 3650)
            $pr_2002 = $request->get('pr_2002_001') / 10;

        $pr_2029 = $request->get('pr_2001') + $pr_2002 + $request->get('pr_2003');

        $pr_2000 = $pr_2029 - $pr_2099;

        $req = [
            $request->get('pr_2000_001'), $request->get('pr_2000_002'), $request->get('pr_2000_003'),
            $request->get('pr_2000_004'), $request->get('pr_2000_005'), $request->get('pr_2000_101'),
            $request->get('pr_2000_102'), $request->get('pr_64151101'), $request->get('pr_64151951'),
            $request->get('pr_2000_201'), $request->get('pr_2000_202'), $request->get('pr_2000_301'),
            $request->get('pr_2001'), $request->get('pr_2031'), $request->get('pr_2032'),
            $request->get('pr_2033'), $request->get('pr_2098'), $request->get('pr_2002_001'),
            $request->get('pr_2000_401'), $request->get('pr_2000_402'), $request->get('pr_2000_403'),
            $request->get('pr_64150301'), $request->get('pr_64150302'), $request->get('pr_64150303'),
            $request->get('pr_2000_501'), $request->get('pr_2000_502'), $request->get('pr_date'),
            $pr_2029, $pr_2099, $pr_2000, $pr_2002,$agriculture,$commercial,$agri_sum,$other_sum

         ];

        $codes = ['pr_2000_001', 'pr_2000_002', 'pr_2000_003', 'pr_2000_004', 'pr_2000_005', 'pr_2000_101', 'pr_2000_102',
            'pr_64151101', 'pr_64151951', 'pr_2000_201', 'pr_2000_202', 'pr_2000_301', 'pr_2001', 'pr_2031', 'pr_2032',
            'pr_2033', 'pr_2098', 'pr_2002_001', 'pr_2000_401', 'pr_2000_402', 'pr_2000_403', 'pr_64150301', 'pr_64150302',
            'pr_64150303', 'pr_2000_501', 'pr_2000_502', 'pr_date', 'pr_2029', 'pr_2099', 'pr_2000', 'pr_2002',
            'agriculture','other','agri_sum','other_sum'
            ];

        foreach($codes as $key => $code){
//            print_r($code.'|'.$req[$key]. '<br>');
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
}
