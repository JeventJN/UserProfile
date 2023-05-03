<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //
    public function index(){
        $arrActivity = [
            ['Date' => '1 April', 'id'=>"1"],
            ['Date' => '2 April', 'id'=>"2"],
            ['Date' => '4 April', 'id'=>"3"],
            ['Date' => '6 April', 'id'=>"4"],
            ['Date' => '11 April', 'id'=>"5"],
            ['Date' => '18 April', 'id'=>"6"],
            ['Date' => '20 April', 'id'=>"7"],
            ['Date' => '21 April', 'id'=>"8"],
            ['Date' => '23 April','id'=>"9"],
            ['Date' => '24 April','id'=>"10"],
            ['Date' => '26 April','id'=>"11"],
            ['Date' => '27 April','id'=>"12"],
            ['Date' => '28 April','id'=>"13"],
            ['Date' => '30 April','id'=>"14"],
            ['Date' => '2 Mei','id'=>"15"],
            ['Date' => '3 Mei','id'=>"16"],
            ['Date' => '5 Mei','id'=>"17"],
            ['Date' => '6 Mei','id'=>"18"],
            ['Date' => '6 Mei','id'=>"19"],
            ['Date' => '7 Mei','id'=>"20"],
        ];
        return view('activity', compact('arrActivity'));
    }

    public function index1($judul){
        $arrDets = [
            ['Type' => '1K', 'Status' => "Prime", "Time" => "03:30", "Min" => "3.5", 'id'=>"1"],
            ['Type' => '5K', 'Status' => "Prime", "Time" => "23:38", "Min" => "23.63", 'id'=>"2"],
            ['Type' => '10K', 'Status' => "Prime", "Time" => "55:37", "Min" => "55.61", 'id'=>"3"],
            ['Type' => '21K', 'Status' => "Prime", "Time" => "2:10:17", "Min" => "130.28", 'id'=>"4"],
            ['Type' => '5K', 'Status' => "Injured", "Time" => "29:10", "Min" => "28.17", 'id'=>"5"],
            ['Type' => '5K', 'Status' => "Injured", "Time" => "29:33", "Min" => "27.55", 'id'=>"6"],
            ['Type' => '5K', 'Status' => "Prime", "Time" => "25:04", "Min" => "25.06", 'id'=>"7"],
            ['Type' => '5K', 'Status' => "Prime", "Time" => "26:02", "Min" => "26.03", 'id'=>"8"],
            ['Type' => '10K', 'Status' => "Prime", "Time" => "56:37", "Min" => "56.61", 'id'=>"9"],
            ['Type' => '1K', 'Status' => "Prime", "Time" => "03.35", "Min" => "3.58", 'id'=>"10"],
            ['Type' => '5K', 'Status' => "Prime", "Time" => "25:05", "Min" => "25.08", 'id'=>"11"],
            ['Type' => '10K', 'Status' => "Prime", "Time" => "56:01", "Min" => "56.0.17", 'id'=>"12"],
            ['Type' => '5K', 'Status' => "Prime", "Time" => "26:34", "Min" => "26.56", 'id'=>"13"],
            ['Type' => '21K', 'Status' => "Prime", "Time" => "2:23:00", "Min" => "143", 'id'=>"14"],
            ['Type' => '10K', 'Status' => "Injured", "Time" => "1:10:46", "Min" => "70.76", 'id'=>"15"],
            ['Type' => '5K', 'Status' => "Injured", "Time" => "27:40", "Min" => "27.67", 'id'=>"16"],
            ['Type' => '5K', 'Status' => "Injured", "Time" => "32.00", "Min" => "32", 'id'=>"17"],
            ['Type' => '5K', 'Status' => "Prime", "Time" => "25.35", "Min" => "25.58", 'id'=>"18"],
            ['Type' => '1K', 'Status' => "Prime", "Time" => "03.35", "Min" => "3.58", 'id'=>"19"],
            ['Type' => '1K', 'Status' => "Injured", "Time" => "03.05", "Min" => "3.08", 'id'=>"20"],
        ];
        $var = [];
        $B1 =1000;
        $B5 =1000;
        $B10 =1000;
        $B21 =1000;

        foreach($arrDets as $Dets)
        {if($Dets['Type'] == '1K'){
            if($Dets['Min'] < $B1){
                $B1 = $Dets['Min'];
                }
            }
        }

        foreach($arrDets as $Dets)
        {if($Dets['Type'] == '5K'){
            if($Dets['Min'] < $B5){
                $B5 = $Dets['Min'];
                }
            }
        }

        foreach($arrDets as $Dets)
        {if($Dets['Type'] == '10K'){
            if($Dets['Min'] < $B10){
                $B10 = $Dets['Min'];
                }
            }
        }

        foreach($arrDets as $Dets)
        {if($Dets['Type'] == '21K'){
            if($Dets['Min'] < $B21){
                $B21 = $Dets['Min'];
                }
            }
        }

        foreach($arrDets as $Dets)
        {if($Dets['id']==$judul){
            $var = $Dets;
        }
        }
        return view('activitydetail', compact('var', 'B1', 'B5', 'B10', 'B21'));
    }
}
